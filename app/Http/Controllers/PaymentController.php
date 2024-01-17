<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;
    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CREATE_SECRET'));
        $this->gateway->setTestmode(true);
    }

    public function pay(Request $request)
    {
        try{
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl'=> url('success'),
                'cancelUrl' =>url('error')
            ))->send();

            if($response->isRedirect())
            {
                $response ->redirect();
            }
            else{
                return $response->getMessage();
            }
            

            }
            catch(\Throwable $th){
                return $th->getMessage();
            }
        
        }
        public function success(Request $request)
        {
            // Check if necessary parameters are present in the request
            if ($request->has(['paymentId', 'PayerID'])) {
                try {
                    // Complete the purchase with the provided payer_id and transactionReference
                    $transaction = $this->gateway->completePurchase([
                        'payer_id' => $request->input('PayerID'),
                        'transactionReference' => $request->input('paymentId')
                    ]);
    
                    $response = $transaction->send();
    
                    // Check if the response indicates a successful transaction
                    if ($response->isSuccessful()) {
                        $arr = $response->getData();
    
                        // Create a new Payment model instance and populate its attributes
                        $payment = new Payment();
                        $payment->payment_id = $arr['id'];
                        $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                        $payment->payer_email = $arr['payer']['payer_info']['email'];
                        $payment->amount = $arr['transactions'][0]['amount']['total'];
                        $payment->currency = env('PAYPAL_CURRENCY');
                        $payment->payment_status = $arr['state'];
    
                        // Save the payment information to the database
                        $payment->save();
    
                        // Return the payment-bill view with the payment data
                        return view('front.payment-bill', ['payment' => $payment]);
                    } else {
                        // Handle unsuccessful response
                        return 'Payment failed: ' . $response->getMessage();
                    }
                } catch (\Exception $e) {
                    // Log the exception for debugging purposes
                    \Log::error('Error processing PayPal payment: ' . $e->getMessage());
                    return 'An error occurred while processing the payment. Please try again later.';
                }
            } else {
                // Return a message indicating missing parameters
                return 'Payment failed. Missing required parameters.';
            }
        }
    public function error()
    {
        return 'User declined the payment !';
    }
}
