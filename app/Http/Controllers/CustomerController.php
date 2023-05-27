<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Customer;
use App\Models\Sellerinfo;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function home(){
        if (Auth::guard('customer')->check()) {
            $customerName = Auth::guard('customer')->user()->full_name;
        } else {
            // Customer is not logged in
            $customerName = null;
        }
        $services = Category::where('type', '=', 'service')->where('parent_id', null)->get();
        $products = Category::where('type', '=', 'product')->get();
        $cities = City::get();
        return view('customer.homepage',compact('services','products','customerName','cities')); 
        // return view('layouts.frontend_layout.layouts.master'); 
     }
     public function register(){
         return view('customer.customer_register');
     }
     public function save_customer(Request $request){
        if ($request->isMethod('post')) {
            $seller = new Customer();
                $users = new User();
             $data = $request->all();
            //  echo '<pre>';print_r($data);exit;
            $userCount=User::where('email',$data['email'])->count();
            if($userCount>0){
                $message="Email Already Exists!";
                Session::flash('error_message',$message);
                return redirect()->back(); 
            }
            else{
                
                $seller->full_name = $data['full_name'];
                $seller->mobile = $data['mobile'];
                $seller->email = $data['email'];
                $seller->full_address = $data['full_address'];
                $seller->dob = $data['dob'];
                $seller->state = $data['state'];
                $seller->city = $data['city'];
                $seller->password=bcrypt($data['password']);
                $seller->pincode = $data['pincode'];
    
                $users->mobile = $data['mobile'];
                $users->email=$data['email'];
                $users->name=$data['full_name'];
                $users->password=bcrypt($data['password']);
                $users->status=0;
                $users->user_type='customer';
                
                $seller->save();
                $users->save();
    
                // Send Confirmation Email
                $email = $data['email'];
                $messageData = [
                    'email'=> $data['email'],
                    'name'=>$data['full_name'],
                    'code'=>base64_encode($data['email'])
                ];
                Mail::send('emails.confirmation',$messageData,function($message) use($email){
                $message->to($email)->subject('Confirm Your Email Account for Registration');
                });
    
                // Redirect Back With Success Message
    
                $message="Please Check Your Email For Confirmation to Activate Your Account!";
                Session::put('success_message',$message);
                // return redirect()->back();
                // event(new Registered($users));
                auth()->login($users);
                // return redirect('/otp/login');
                return redirect('/dashboard');
                
            }
             
             // return view('layouts.frontend_layout.layouts.frontend_login')->with('success', 'Data added successfully');
         }
     }
     public function customer_email_available_check(Request $request){
        $email = $request->input('email');
        $Registered_count = User::where('email',$email)->count();
        $Customer_count = Customer::where('email',$email)->count();
        if ($Registered_count && $Customer_count) {
            $msg = 'registered';
        }else{
            $msg = 'failed';
        }
       return response()->json(['registered' => $msg]);
     }
     public function customer_phone_available_check(Request $request){
        $mobile = $request->input('mobile');
        $Registered_count = User::where('mobile',$mobile)->count();
        if ($Registered_count) {
            $msg = 'registered';
        }else{
            $msg = 'failed';
        }
       return response()->json(['registered' => $msg]);
     }
    //  public function confirmAccount($email){
    //     // echo 'x';exit;
    //     Session::forget('error_message');
    //     Session::forget('success_message');
    //     $email = base64_decode($email);

    //     // Check User Email Exists

    //     $userCount = User::where('email',$email)->count();
    //     if($userCount>0){
    //          // User Email is already activated or not
    //          $userDetails=User::where('email',$email)->first();
    //          if($userDetails->status==1){
    //              $message = "Your Account is Already Activated. Please Login.";
    //              Session::put('error_message',$message);
    //              return redirect('/login-register');
    //          }else{
    //                     // Update User Status to 1 to Activate Account
    //                     User::where('email',$email)->update(['status'=>1]);
    //                     $messageData=['name'=>$userDetails['name'],'mobile'=>$userDetails['mobile'],'email'=>$email];
    //                      Mail::send('emails.register',$messageData,function($message) use($email){
    //                          $message->to($email)->subject('Welcome to Our Multiseller');
    //                     });
    //                     //redirect to login/register with success page
    //                     $message = " Your Account is Activated. You Can Login Now!";
    //                     Session::put('success_message',$message);
    //                     return redirect('/login-register');
    //          }
    //     }else{
    //         abort(404);
    //     }

    // }
    public function servicecategory($id){
        $parent_category = Category::where('id', $id)->first();
        $category = Category::where('parent_id', $id)->first();
        $subcategories = Category::where('parent_id',$id)->get();
       if ($category) {
          $seller_infos = Sellerinfo::where('category_id',$category->id)->paginate(6);
       }
        return view('customer.servicecategory',compact('category','seller_infos','parent_category','subcategories'));
    }
}
