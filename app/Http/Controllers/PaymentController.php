<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Razorpay\Api\Api;
use Illuminate\Support\Str;


class PaymentController extends Controller
{
    private $razorpayId = "rzp_test_fZPgnDnGdJeW4v";
    private $razorpayKey = "9fPUrzLMfQbnhjTn5lcxALYt";

    public function Initiate(Request $request)
    {
        // Generate random receipt id
        $receiptId = Str::random(20);
        
        // Create an object of razorpay
        $api = new Api($this->razorpayId, $this->razorpayKey);

        // In razorpay you have to convert rupees into paise we multiply by 100
        // Currency will be INR
        // Creating order
        $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR'
            )
        );

        // Return response on payment page
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $request->all()['amount'] * 100,
            'name' => $request->all()['name'],
            'currency' => 'INR',
            'email' => $request->all()['email'],
            'contactNumber' => $request->all()['contactNumber'],
            'address' => $request->all()['address'],
            'description' => 'Testing description',
        ];

        // Let's checkout payment page is it working
        return view('payment-page',compact('response'));
    }

    public function Complete(Request $request)
{
    // Now verify the signature is correct . We create the private function for verify the signature
    $signatureStatus = $this->SignatureVerify(
        $request->all()['rzp_signature'],
        $request->all()['rzp_paymentid'],
        $request->all()['rzp_orderid'],
        $request->all()['rzp_orderid'],
    );

    // If Signature status is true We will save the payment response in our database
    // In this tutorial we send the response to Success page if payment successfully made
    if($signatureStatus == true)
    {
        // You can create this page
        return view('payment-success-page');
    }
    else{
        // You can create this page
        return view('payment-failed-page');
    }
}

// In this function we return boolean if signature is correct
private function SignatureVerify($_signature,$_paymentId,$_orderId)
{
    try
    {
        // Create an object of razorpay class
        $api = new Api($this->razorpayId, $this->razorpayKey);
        $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
        $order  = $api->utility->verifyPaymentSignature($attributes);
        return true;
    }
    catch(\Exception $e)
    {
        // If Signature is not correct its give a excetption so we use try catch
        return false;
    }
}

    public function pay()
    {
        
    }
}