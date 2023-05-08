<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthOtpController extends Controller
{
    // Return View of OTP Login Page
    public function login()
    {
        return view('auth.otp-login');
    }

    // Generate OTP
    public function generate(Request $request)
    {
        $data = $request->all();
            //  echo '<pre>';print_r($data);exit;
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
                     # Validate Data
                        $request->validate([
                            'mobile' => 'required|exists:users,mobile'
                        ]);

                        # Generate An OTP
                        $verificationCode = $this->generateOtp($request->mobile);
                        
                        $message = "Your OTP To Login is - ".$verificationCode->otp;
                        # Return With OTP 
                        // echo $message;exit;
                        return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id])->with('success',  $message); 
                    
                }
            }
       
    }

    public function generateOtp($mobile_no)
    {
        $user = User::where('mobile', $mobile_no)->first();

        # User Does not Have Any Existing OTP
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        // Create a New OTP
        return VerificationCode::create([
            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);
    }

    public function verification($user_id)
    {
        return view('auth.otp-verification')->with([
            'user_id' => $user_id
        ]);
    }

    public function loginWithOtp(Request $request)
    {
        #Validation
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required'
        ]);

        #Validation Logic
        $verificationCode   = VerificationCode::where('user_id', $request->user_id)->where('otp', $request->otp)->first();
        $userstatus   = User::where('id', $request->user_id)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Your OTP is not correct');
        }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){
            return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');
        }

        $user = User::whereId($request->user_id)->first();

        if($user){
            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now()
            ]);
            // $userstatus->update([
            //     'status' => 1
            // ]);

            Auth::login($user);

            return redirect('/dashboard');
            // return redirect('/');
        }

        return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');
    }
}
