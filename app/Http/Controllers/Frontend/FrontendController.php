<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Sellerinfo;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
       return view('layouts.frontend_layout.layouts.master'); 
    }
    public function register(){
        return view('layouts.frontend_layout.layouts.frontend_register');
    }
    public function save_frontend_seller(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo '<pre>';print_r($data);exit;
            $seller = new Sellerinfo();
            $users = new User;
            $seller->company_name = $data['company_name'];
            $seller->seller_name = $data['seller_name'];
            $seller->phone = $data['phone'];
            $seller->email = $data['email'];
            $seller->year_drp_down = $data['year_drp_down'];
            $seller->gst_no = $data['gst_no'];
            $seller->pan_no = $data['pan_no'];

            $users->email=$data['email'];
            $users->name=$data['seller_name'];
            $users->password=bcrypt($data['password']);
//             $user->address="";
//             $user->status=1;
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/userdata/', $filename);
                $seller->image = $filename;
            }
            $seller->save();
            $users->save();
            event(new Registered($users));
            auth()->login($users);
            return redirect('/dashboard');
            // return view('layouts.frontend_layout.layouts.frontend_login')->with('success', 'Data added successfully');
        }
    }
}
