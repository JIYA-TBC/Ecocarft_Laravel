@extends('front.master')

@section('content')
<!-- Template Stylesheet -->
<link href="{{asset('front/css/style.css')}}" rel="stylesheet">

<div class="paymentcard">
    <div class="thank-you">Thank You for Your Payment!</div>

    <div class="container paymentcenter-container">
        <h1>Payment Bill</h1>
        <p>Payment ID: {{ $payment->payment_id }}</p>
        <p>Payer ID: {{ $payment->payer_id }}</p>
        <p>Payer Email: {{ $payment->payer_email }}</p>
        <p>Amount: {{ $payment->amount }} {{ $payment->currency }}</p>
        <p>Status: {{ $payment->payment_status }}</p>
    </div>
</div>

@endsection