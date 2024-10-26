<?php

namespace App\Http\Controllers;

use App\Models\OrderPayment;
use Exception;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

    public function charge(Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put("users", $user);

            if ($request->input('submit')) {
                try {
                    $response = $this->gateway->purchase(array(
                        'amount' => $request->input('amount'),
                        'currency' => env('PAYPAL_CURRENCY'),
                        'propertyID' => $request->input('propertyID'),
                        'returnUrl' => url('success'),
                        'cancelUrl' => url('error'),
                    ))->send();

                    if ($response->isRedirect()) {
                        session()->put('propertyID', $request->input('propertyID'));
                        session()->put('userID', $user['userID']);
                        $response->redirect(); // this will automatically forward the customer
                    } else {
                        // not successful
                        return $response->getMessage();
                    }
                } catch (Exception $e) {
                    return $e->getMessage();
                }
            }
        }

        return redirect("/");
    }

    /**
     * Charge a payment and store the transaction.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful()) {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $payment = new OrderPayment();
                $payment->payment_id = $arr_body['id'];
                $propertyID = session()->pull('propertyID');
                $payment->propertyID = $propertyID;
                $userID = session()->pull('userID');
                $payment->userID = $userID;
                $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr_body['state'];
                $payment->save();

                // return "Payment is successful. Your transaction id is: " . $arr_body['id'];
                session()->put("paymentSuccessful", true);
                return redirect("/property_list/" . $propertyID . "#pdetails");
            } else {
                return $response->getMessage();
            }
        } else {
            return 'Transaction is declined';
        }
    }

    /**
     * Error Handling.
     */
    public function error()
    {
        return 'User cancelled the payment.';
    }
}
