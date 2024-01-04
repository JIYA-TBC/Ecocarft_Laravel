<?php
use Illuminate\Support\Facades\Mail;

Route::get('/send-test-email', function () {
    Mail::raw('Test email content', function ($message) {
        $message->to('jiyayadav102@gmail.com')->subject('Test Email');
    });

    return 'Test email sent successfully!';
});
