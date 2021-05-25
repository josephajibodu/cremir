<?php
namespace App\Services;

use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Auth;
use DB;

use App\Models\Order;

class PaymentService
{
    public function callback() {
      // Handle cancelled orders
      if (request()->has('status') && request()->status == 'cancelled') {
          return redirect()->route('bootcamp')->with('error', 'Payment cancelled please try again.');
      }

      $orderID = Flutterwave::getTransactionIDFromCallback();
      
      $data = Flutterwave::verifyTransaction($orderID);
      
      return $this->processCharge($data);
    }

    public function webhook(Request $request) {
        Log::info('Webhook received');
        //This verifies the webhook is sent from Flutterwave
        $verified = Flutterwave::verifyWebhook();

        // if it is a charge event, verify and confirm it is a successful order
        if ($verified && $request->event == 'charge.completed' && $request->data->status == 'successful') {
            Log::info('*** PAYMENT WEBHOOK ***');
            $verificationData = Flutterwave::verifyPayment($request->data['id']);
            if ($verificationData['status'] === 'success') {
                // process for successful charge
                $this->processCharge($verificationData, true);
            }

        }
        
        exit(0);
    }

    protected function processCharge($data, $isWebhook = false) {
        // Get the order from your DB using the order reference (txref)
        $order = Order::where('reference', request()->query('tx_ref'))->first();

        // Handle when order is null. In case webhook is ahead of direct callback or vice-versa
        if (is_null($order)) {
            return $isWebhook ===  true ? exit() : redirect()->route('bootcamp.payment.success')->with('success', 'Invalid order. This could mean the payment failed or was cancelled. Thank you!');
        }
        
        // Check if you have previously given value for the order. If you have, redirect to your successpage else, continue
        if ($order->status === 'successful') {
            return $isWebhook ===  true ? exit() : redirect()->route('bootcamp.payment.success')->with('success', 'Payment successful! Check the order tab for update. It should take 15-20 minutes!');
        }
        // Confirm that the $data['data']['status'] is 'successful'
        if ($data['data']['status']  !== 'successful') {
            // $order->delete();
            return $isWebhook ===  true ? exit() : redirect()->route('bootcamp.payment.success')->with('error', 'Payment failed!');
        }
        // Confirm that the currency on your db order is equal to the returned currency
        if ($data['data']['currency']  !== 'NGN') {
            // $order->delete();
            return $isWebhook ===  true ? exit() : redirect()->route('bootcamp.payment.success')->with('error', 'Payment failed! [CE]');
        }
        // Confirm that the db order amount is equal to the returned amount
        $amt = $order->amount/100;
        if ($data['data']['amount']  !== $amt) {
            // $order->delete();
            return $isWebhook ===  true ? exit() : redirect()->route('bootcamp.payment.success')->with('error', 'Payment failed! [AE]');
        }
        // Update the db order record (including parameters that didn't exist before the order is completed. for audit purpose)
        // Give value for the order
        // Update the order to note that you have given value for the order
        $order->status = 'succeed';
        $order->save();
        // You can also redirect to your success page from here
        return $isWebhook ===  true ? exit() : redirect()->route('bootcamp.payment.success')->with('success', 'Payment successful!  Check the order tab for update. It should take 15-20 minutes!');
    }
}