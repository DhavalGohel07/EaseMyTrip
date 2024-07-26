<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Models\Admin_Destination;
use App\Models\Admin_Resort;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

class BookingController extends Controller
{

   
    /**
     * Display a listing of the resource.
     * 
     * 
     */
    public function index($id)
    {

    
        $ddata = Admin_Destination::find($id);

        $name = $ddata->dname;
        
        $price = $ddata->dprice;
        Session::put('amount' , $price*100);
        return view('user.booking', compact('name','price'));


        // return view('user.booking');

     
    }

  public function success(){
        return view('user.success');
    }


    public function indexresort($id, Request $request)
    {

        $ddata = Admin_Resort::find($id);

        $name = $ddata->rname;
        
        $price = $ddata->rprice;

        return view('user.booking', compact('name','price'));
    }

    public function store(Request $request){

        $packageName = $request->input('pname');
        $packagePrice = $request->input('price');
        $email = $request->input('email');
        $phoneNo = $request->input('phone');
        $persons = $request->input('person');
        $selectedDate = $request->input('date');
        
        $totalprice = ($persons * $packagePrice);

        $api = new Api('rzp_test_M8861YNKTu5BjB', '8JA8cjxXHceayjBUlK6KXf92');
        $order  = $api->order->create(array('receipt' => '123', 'amount' => $packagePrice , 'currency' => 'INR')); // Creates order
        $orderId = $order['id']; 

        $user_pay = new Booking();
    


        $user_pay->email = $request->email;
        $user_pay->name = $request->name;
        $user_pay->price = $totalprice;
        $user_pay->phone = $request->phone;
        $user_pay->person = $request->person;
        $user_pay->date = $request->date;
        $user_pay->paymentid =$orderId;

      
        $user_pay->save();

        $data = array(
            'order_id' => $orderId,
            'amount' => $packagePrice
        );

        // Session::put('order_id', $orderId);
        // Session::put('amount' , $packagePrice);

        // return redirect()->route('user.booking')->with('data', $data);
        return view('user.confirmpay',compact('persons'));
       
    }


  






}
//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)

//     {
//         //

//          // Retrieve data from the form fields
//          $packageName = $request->input('pname');
//          $packagePrice = $request->input('price');
//          $email = $request->input('email');
//          $phoneNo = $request->input('phone');
//          $persons = $request->input('person');
//          $selectedDate = $request->input('date');
 
      
//         // $input = $request->all();
  
//         // $api = new Api("rzp_test_M8861YNKTu5BjB", "8JA8cjxXHceayjBUlK6KXf92");
  
//         // $payment = $api->payment->fetch($input['razorpay_payment_id']);
  
//         // if(count($input)  && !empty($input['razorpay_payment_id'])) {
//         //     try {
//         //         $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount'])); ; 
  
//         //     } catch (Exception $e) {
//         //         return  $e->getMessage();
//         //         Session::put('error',$e->getMessage());
//         //         return redirect()->back();
//         //     }
//         // }
          
//         // Session::put('success', 'Payment successful');

//         $user = new Booking();

//         $user->email = $request->email;
//         $user->name = $request->name;
//         $user->price = $request->price;
//         $user->phone = $request->phone;
//         $user->person = $request->person;
//         $user->date = $request->date;
//         $user->paymentid = "helxscdkjb";
//         $user -> save();

//         return view('User.Destination');

        
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Booking $booking)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Booking $booking)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Booking $booking)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Booking $booking)
//     {
//         //
//     }
// }
