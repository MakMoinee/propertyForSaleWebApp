<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

 return [
    'client_id' => env('PAYPAL_SANDBOX_CLIENT_ID'),
    'secret' => env('PAYPAL_SANDBOX_SECRET'),
    'mode' => env('PAYPAL_SANDBOX_MODE', true), // true for sandbox, false for live
];