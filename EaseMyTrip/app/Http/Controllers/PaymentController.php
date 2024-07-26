<?php

namespace App\Http\Controllers;


use App\Models\Admin_Destination;
use App\Models\Admin_Resort;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

class PaymentController extends Controller
{
    
    public function pay(Request $request){




        return redirect('/history');
    }

    public function store(Request $request)
    {
        $input = $request->all();
  
        $api = new Api('rzp_test_M8861YNKTu5BjB', '8JA8cjxXHceayjBUlK6KXf92');
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); 
  
            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }
          
        Session::put('success', 'Payment successful');
        return redirect()->back();
    }
}


