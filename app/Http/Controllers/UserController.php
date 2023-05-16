<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\AppointmentMaster;
use App\Models\Category;
use App\Models\Consultation;
use App\Models\DoctorInformation;
use App\Models\User;
use App\Models\HospitalData;
use App\Models\Medicine;
use App\Models\PatientInfo;
use App\Models\Product;
use App\Models\Sellerinfo;
use App\Models\Service;
use App\Models\Speciality;
use App\Models\State;
use App\Models\StateCity;
use App\Models\Symptom;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function loginRegister(){
        return view('home.login_register');
    }

    // public function registerUser(Request $request){
    //     if($request->isMethod('post')){
    //         Session::forget('error_message');
    //         Session::forget('success_message');
    //         $data = $request->all();
    //         // echo "<pre>"; print_r($data); die;
    //         $rules=[
    //             'name'=>'required|regex:/^[\pL\s\-]+$/u',
    //             'mobile'=>'required|numeric|digits:10',
    //             'email'=> 'required|email|max:255',
    //             'password'=>'required',
    //             'password'=>'required|digits:8',
    //             'password.required'=>'Password Must be Minimum 8 Digit',
                
    //         ];
    //         $customMessages=[
    //             'name.required'=>'Name is Required',
    //             'name.alpha'=>'Valid Name is Required',
    //             'mobile.required'=>'Mobile No. is Required',
    //             'mobile.numeric'=>'valid Mobile no. is Required',
    //             'mobile.digits'=>'Number Must be 10 Digit',
    //             'email.required'=> 'Email is Required',
    //             'email.email'=>'Valid Email is Required',
    //             'password.required'=>'Password is Required',
                
    //         ];
            
    //         $this->validate($request,$rules,$customMessages);

    //         $userCount=User::where('email',$data['email'])->count();
    //         if($userCount>0){
    //             $message="Email Already Exists!";
    //             Session::flash('error_message',$message);
    //             return redirect()->back(); 
    //         }
    //         else{
    //             $user = new User;
    //             $user->name=$data['name'];
    //             $user->email=$data['email'];
    //             $user->mobile=$data['mobile'];
    //             $user->password=bcrypt($data['password']);
    //             $user->address="";
    //             $user->status=1;
    //             // $user->status=0;
    //             $user->save();

    //             // Send Confirmation Email
    //             $email = $data['email'];
    //             $messageData = [
    //                 'email'=> $data['email'],
    //                 'name'=>$data['name'],
    //                 'code'=>base64_encode($data['email'])
    //             ];
    //             // Mail::send('emails.confirmation',$messageData,function($message) use($email){
    //             // $message->to($email)->subject('Confirm Your Email Account for Registration');
    //             // });

    //             // Redirect Back With Success Message

    //             $message="Successfully registered!";
    //             // $message="Please Check Your Email For Confirmation to Activate Your Account!";
    //             Session::put('success_message',$message);
    //             return redirect()->back();

    //             // if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
    //             //     // echo "<pre>"; print_r(Auth::User()); die;
    //             //     if(!empty(Session::get('session_id'))){
    //             //         $user_id = Auth::user()->id;
    //             //         $session_id = Session::get('session_id');
    //             //         Cart::where('session_id',$session_id)->update(['user_id'=>$user_id]);
    //             //     }

    //             //     $email=$data['email'];
    //             //     $messageData=['name'=>$data['name'],'mobile'=>$data['mobile'],'email'=>$data['email']];
    //             //     Mail::send('emails.register',$messageData,function($message) use($email){
    //             //         $message->to($email)->subject('Welcome to Airsoft Point');
    //             //     });
    //             //     return redirect('/products/my-cart');
    //             // }
    //         }
    //     }
    // }

    public function confirmAccount($email){
        Session::forget('error_message');
        Session::forget('success_message');
        $email = base64_decode($email);

        // Check User Email Exists

        $userCount = User::where('email',$email)->count();
        if($userCount>0){
             // User Email is already activated or not
             $userDetails=User::where('email',$email)->first();
             if($userDetails->status==1){
                 $message = "Your Account is Already Activated. Please Login.";
                 Session::put('error_message',$message);
                 return redirect('/login-register');
             }else{
                        // Update User Status to 1 to Activate Account
                        User::where('email',$email)->update(['status'=>1]);
                        $messageData=['name'=>$userDetails['name'],'mobile'=>$userDetails['mobile'],'email'=>$email];
                         Mail::send('emails.register',$messageData,function($message) use($email){
                             $message->to($email)->subject('Welcome to Our Multiseller');
                        });
                        //redirect to login/register with success page
                        $message = " Your Account is Activated. You Can Login Now!";
                        Session::put('success_message',$message);
                        return redirect('/login-register');
             }
        }else{
            abort(404);
        }

    }

    public function logoutUser(){
        Auth::logout();
        return redirect('/login-register');
    }

    public function loginUser(Request $request){
        if($request->isMethod('post')){
            Session::forget('error_message');
            Session::forget('success_message');
            $data = $request->all();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                $request->session()->put('loginId', $data['email']);
                // Session::flash('error_message','Invalid Email or Password!');
                // //Check Email is Activator or Not
                // $userStatus = User::where('email',$data['email'])->first();
                // if($userStatus->status==0){
                //     Auth::logout();
                //     $message = "Your Account is Not Activated Yet! Please Confirm Your Email to Activate!";
                //     Session::put('error_message',$message);
                //     return redirect()->back();
                // }
                
                return redirect('/dashboard');
            }else{
                $message="Invalid Email or Password!";
                Session::flash('error_message',$message);
                return redirect()->back();
            }
        }
    }

    public function forgotPassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            Session::forget('error_message');
            Session::forget('success_message');
            // echo "<pre>"; print_r($data); die;
            $emailCount = User::where('email',$data['email'])->count();
            if($emailCount==0){
                $message= "Email Does Not Exists!";
                Session::put('error_message','Email Does Not Exists!');
                Session::forget('success_message');
                return redirect()->back();
            }

            //Generate New Random Password
            $random_password = Str::random(8);
            //Encode/secure password
            $new_password = bcrypt($random_password);
            User::where('email',$data['email'])->update(['password'=>$new_password]);
            $userName = User::select('name')->where('email',$data['email'])->first();
            $email = $data['email'];
            $name = $userName->name;
            $messageData = [
                'email'=>$email,
                'name'=>$name,
                'password'=>$random_password
            ];
            Mail::send('emails.forgot_password',$messageData,function($message) use($email){
            $message->to($email)->subject("Get New Password - E-Commerce");
            });

            $message = "Please Check Email For New Password!";
            Session::put('success_message',$message);
            return redirect('/login-register');
        }
        return view('home.forgot_password');
    }

    

    // public function chkUserPassword(Request $request){
    //     if($request->isMethod('post')){
    //         $data = $request->all();
    //         // echo "<pre>"; print_r($data); die;
    //         $user_id = Auth::User()->id;
    //         $checkPassword = User::select('password')->where('id',$user_id)->first();
    //         if(Hash::check($data['current_pwd'],$checkPassword->password)){
    //             return "true";
    //         }else{
    //             return "false";
    //         }
    //     }
    // }
    // public function updateUserPassword(Request $request){
    //     if($request->isMethod('post')){
    //         $data = $request->all();
    //         Session::forget('error_message');
    //         Session::forget('success_message');
            
    //         // echo "<pre>"; print_r($data); die;
    //         $user_id = Auth::User()->id;
    //         $checkPassword = User::select('password')->where('id',$user_id)->first();
    //         if(Hash::check($data['current_pwd'],$checkPassword->password)){
    //             //Update Password
    //             $new_pwd = bcrypt($data['new_pwd']);
    //             User::where('id',$user_id)->update(['password'=>$new_pwd]);
    //             $message = "Password Updated Successfully";
    //             Session::put('success_message',$message);
    //             return redirect()->back();

    //         }else{
    //             $message = "Current Password is Incorrect!";
    //             Session::put('error_message',$message);
    //             return redirect()->back();
    //         }
    //     }
    // }
    public function addSeller(Request $request){
        return view('layouts.admin_layout.add_seller');
    }
    public function save_seller(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo '<pre>';print_r($data);exit();
            $seller = new Sellerinfo;
            $users = new User;
            $seller->company_name=$data['company_name'];
            $seller->seller_name=$data['seller_name'];
            $seller->email=$data['email'];
            $seller->phone=$data['phone'];
            $seller->password=bcrypt($data['password']);
            $seller->full_address=$data['full_address'];
            $seller->pan_no=$data['pan_no'];
            $seller->gst_no=$data['gst_no'];
            $seller->opening_time=$data['opening_time'];
            $seller->closing_time=$data['closing_time'];
            $seller->business_hr=implode(',',$data['business_hr']);
            $users->email=$data['email'];
            $users->name=$data['seller_name'];
            // $users->mobile=$data['phone'];
            $users->password=bcrypt($data['password']);
            // $users->address=$data['address'];
            // $users->user_type='hospital';
            $seller->year_drp_down=$data['year_drp_down'];
            $seller->latitude=$data['latitude'];
            $seller->longitude=$data['longitude'];
            if($request->hasfile('image'))
            {
                $file = $request->file('image');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('uploads/userdata/', $filename);
                $seller->image = $filename;
            }
            // $user->status=0;
            $seller->save();
            $users->save();
            
            return redirect('/add-seller')->with('success', 'Data added successfully');
            // return redirect()->back()->with('status','Data added successfully');
        }
       
       
       
        
    }

    public function listSeller(){
        $clinicdata = Sellerinfo::paginate(5);
       
        $count = Sellerinfo::count();
        return view('layouts.admin_layout.all_seller_list',compact('clinicdata','count'));
    }
    public function editSeller($id){
        $clinicdata = Sellerinfo::find($id);
        return view('layouts.admin_layout.seller_edit',compact('clinicdata'));
    }
    public function updateSeller(Request $request,$id){
        // dd($request);
        $clinicdata = Sellerinfo::find($id);
        $clinicdata->seller_name = $request->seller_name ;        
        $clinicdata->email=$request->email;
        $clinicdata->phone=$request->phone;
        $clinicdata->password=bcrypt($request->password);
        $clinicdata->full_address= $request->full_address;
        $clinicdata->year_drp_down=$request->year_drp_down;
        $clinicdata->latitude=$request->latitude;
        $clinicdata->longitude=$request->longitude;
        $clinicdata->opening_time=$request->opening_time;
        $clinicdata->gst_no=$request->gst_no;
        $clinicdata->closing_time=$request->closing_time;
        $clinicdata->pan_no=$request->pan_no;
        $clinicdata->business_hr= implode(',',$request->business_hr) ;
        if($request->hasfile('image'))
        {
            $destination ="uploads/userdata/".$clinicdata->image;
            if (File::exists($destination)) {
               File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/userdata/', $filename);
            $clinicdata->image = $filename;
        }
        $clinicdata->update();
        return redirect('/list-seller')->with('status', 'Data updated successfully');
    }
    public function deleteSeller($id){
        $clinicdata = Sellerinfo::find($id);
        $destination ="uploads/userdata/".$clinicdata->image;
        if (File::exists($destination)) {
            File::delete($destination);
         }
         $clinicdata->delete();
         return redirect('/list-seller')->with('status', 'Data deleted successfully');
    }
    public function email_available_check(Request $request){
        if($request->get('email'))
        {
            $email = $request->get('email');
            $data = DB::table("users")
            ->where('email', $email)
            ->count();
            if($data > 0)
            {
            echo 'not_unique';
            }
            else
            {
            echo 'unique';
            }
        }
    
    }


    // Category code start
    
    
    public function list_category(){
        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->paginate(5);
    
        // $specialitydata = Category::paginate(5);       
        $count = Category::count();
        return view('layouts.admin_layout.category_list',compact('categories','count'));
    }
    public function filtercategory(Request $request)
    {
        $selectedValue = $request->input('selectedValue');
        
        $data = Category::where('type', $selectedValue)->get();
        
        return response()->json($data);
    }
    public function delete_category($id){
        $category = Category::findOrFail($id);
    if(count($category->subcategory))
    {
        $subcategories = $category->subcategory;
        foreach($subcategories as $cat)
        {
            $cat = Category::findOrFail($cat->id);
            $cat->parent_id = null;
            $cat->save();
        }
    }
    $category->delete();
        // $statedata = Category::find($id);
       
        //  $statedata->delete();
         return redirect('/list-category')->with('status', 'Data deleted successfully');
    }
    public function createCategory(Request $request)
    {
        
        if($request->isMethod('POST')){
            $data = $request->all();
           
            $categorydata = new Category;
            $categorydata->name = $data['name'];
            $categorydata->slug = $data['slug'];
            $categorydata->type = $data['type'];
            $categorydata->parent_id = $data['parent_id'];
           
            if($request->hasfile('thumbnail'))
            {
                    $file = $request->file('thumbnail');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('uploads/category/', $filename);
                    $categorydata->thumbnail = $filename;
            }
            
            $categorydata->save();
            return redirect('/list-category')->with('success', 'Data added successfully');
            // return redirect()->back()->with('success', 'Category has been created successfully.');
        }
       
    }
    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::where('parent_id', null)->where('id', '!=', $category->id)->orderby('name', 'asc')->get();
        // echo '<pre>';print_r($category);exit();
        return view('layouts.admin_layout.edit-category',compact('category', 'categories'));
    }
    public function save_category($id,Request $request){
       
        $category = Category::findOrFail($id);
       
            $data = $request->all();
       
            if($request->name != $category->name || $request->parent_id != $category->parent_id)
            {
                if(isset($request->parent_id))
                {
                    $checkDuplicate = Category::where('name', $request->name)->where('parent_id', $request->parent_id)->first();
                    if($checkDuplicate)
                    {
                        return redirect()->back()->with('error', 'Category already exist in this parent.');
                    }
                }
                else
                {
                    $checkDuplicate = Category::where('name', $request->name)->where('parent_id', null)->first();
                    if($checkDuplicate)
                    {
                        return redirect()->back()->with('error', 'Category already exist with this name.');
                    }
                }
            }
            // $categorydata = new Category;
            $category->name = $data['name'];
            $category->slug = $data['slug'];
            $category->type = $data['type'];
            $category->parent_id = $data['parent_id'];
           
            if($request->hasfile('thumbnail'))
            {
                    $file = $request->file('thumbnail');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('uploads/category/', $filename);
                    $category->thumbnail = $filename;
            }
            
            $category->save();
            
            return redirect('/list-category')->with('success', 'Category has been updates successfully.');
       
    }
// category end code
    
   
    public function symptom_available_check(Request $request){
        if($request->get('symptom'))
        {
            $symptom = $request->get('symptom');
            $data = DB::table("symptoms")
            ->where('symptom', $symptom)
            ->count();
            if($data > 0)
            {
            echo 'not_unique';
            }
            else
            {
            echo 'unique';
            }
        }
    }
    // Speciality code end

    // Product Service code start
    public function add_product_service(){
        return view('layouts.admin_layout.add_product_service');
    }
    public function save_product_service(Request $request){
        $data = $request->all();
        $visibleDivId = $data['visible_div'];
        // echo '<pre>';print_r($data);exit();
        if($request->isMethod('post')){
            

            if ($visibleDivId === 'form-product') {
                $productdata = new Product();
                $productdata->type = $data['type'];
                $productdata->seller_name = $data['seller_name'];
                $productdata->product_title = $data['product_title'];
                $productdata->product_description = $data['product_description'];
                $productdata->specification = $data['specification'];
                $productdata->packaging_type = $data['packaging_type'];
                $productdata->color = $data['color'];
                $productdata->packagingsize = $data['packagingsize'];
                $productdata->special_feature = $data['special_feature'];
                $productdata->brand = $data['brand'];
                $productdata->country_origin = $data['country_origin'];
                $productdata->expiry_date = $data['expiry_date'];
                $productdata->order_quantity = $data['order_quantity'];
               
                if($request->hasfile('image'))
                {
                        $file = $request->file('image');
                        $extention = $file->getClientOriginalExtension();
                        $filename = time().'.'.$extention;
                        $file->move('uploads/product/', $filename);
                        $productdata->image = $filename;
                }
                
                $productdata->save();
                return redirect('/add-product-service')->with('success', 'Data added successfully');
              } else if ($visibleDivId === 'form-service') {

                // echo '<pre>';print_r($data);exit();
                $servicedata = new Service();
                $servicedata->type = $data['type'];
                $servicedata->seller_name = $data['seller_name'];
                $servicedata->category_id = $data['service-category'];
                $servicedata->address = $data['address'];
                $servicedata->phone = $data['phone'];
                $servicedata->is_whatsapp = $data['is_whatsapp'];
                $servicedata->price = $data['price'];
                $servicedata->unit = $data['unit'];
                $servicedata->features = $data['features'];
                $servicedata->payment_mode = $data['payment_mode'];
                $servicedata->service_highlight = $data['service_highlight'];
                $servicedata->from_date = $data['from_date'];
                $servicedata->to_date = $data['to_date'];
                $servicedata->question = implode(',',$data['question']);
                $servicedata->answer = implode(',',$data['answer']);
               
                $servicedata->save();
                return redirect('/list-service')->with('success', 'Data added successfully');
                // return redirect('/add-product-service')->with('success', 'Data added successfully');
              }
        }
    }
    public function getSellers(Request $request){
        $search = $request->search;

      if($search == ''){
         $employees = User::orderby('id','desc')->select('id','name')->limit(5)->get();
      }else{
         $employees = User::orderby('id','desc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
      }

      $response = array();
      foreach($employees as $employee){
         $response[] = array(
              "id"=>$employee->id,
              "text"=>$employee->name
         );
      }
      return response()->json($response); 
    }

    public function list_service(){
        $services = Service::paginate(5);
       
        $count = Service::count();
        return view('layouts.admin_layout.list_service',compact('services','count'));
    }
    public function list_product(){
        $products = Product::paginate(5);
       
        $count = Product::count();
        return view('layouts.admin_layout.list_product',compact('products','count'));
    }
    public function product_edit($id){
        $productdata = Product::find($id);
        $categories = Category::where('type', '=', 'product')->orderby('name', 'asc')->get();
        $sellernames = User::orderby('name', 'asc')->get();
        return view('layouts.admin_layout.product_edit',compact('productdata','categories','sellernames'));
    }
    // Fetch records
   public function getProductcategory(Request $request){
        $search = $request->search;

        if($search == ''){
        $employees = Category::orderby('name','asc')->select('id','name')->where('type','=', 'product')->limit(5)->get();
        }else{
        $employees = Category::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
        }

        $response = array();
        foreach($employees as $employee){
        $response[] = array(
                "id"=>$employee->id,
                "text"=>$employee->name
        );
        }
        return response()->json($response); 
    } 
   public function getServicecategory(Request $request){
        $search = $request->search;

        if($search == ''){
        $employees = Category::orderby('name','asc')->select('id','name')->where('type','=', 'service')->limit(5)->get();
        }else{
        $employees = Category::orderby('name','asc')->select('id','name')->where('name', 'like', '%' .$search . '%')->limit(5)->get();
        }

        $response = array();
        foreach($employees as $employee){
        $response[] = array(
                "id"=>$employee->id,
                "text"=>$employee->name
        );
        }
        return response()->json($response); 
    } 
    public function productstschange(Request $request){
        $product = Product::find($request->prd_id);
        $product->status = $request->status;
        $product->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function servicestschange(Request $request){
        $service = Service::find($request->service_id);
        $service->status = $request->status;
        $service->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
    public function update_product(Request $request,$id){
        $productdata = Product::find($id);
        $productdata->type = $request->type ;        
        $productdata->seller_name = $request->seller_name;
        $productdata->product_title = $request->product_title;
        $productdata->product_description= $request->product_description;
        $productdata->specification=$request->specification;
        $productdata->packaging_type=$request->packaging_type;
        $productdata->color=$request->color;
        $productdata->packagingsize=$request->packagingsize;
        $productdata->special_feature =$request->special_feature;
        $productdata->brand=$request->brand;
        $productdata->country_origin=$request->country_origin;
        $productdata->expiry_date=$request->expiry_date;
        $productdata->order_quantity=$request->order_quantity;
        
        if($request->hasfile('image'))
        {
            $destination ="uploads/product/".$productdata->image;
            if (File::exists($destination)) {
               File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/', $filename);
            $productdata->image = $filename;
        }
        $productdata->update();
        return redirect('/list-product')->with('status', 'Data updated successfully');
    }
    public function service_edit($id){
        $servicedata = Service::find($id);
        $categories = Category::where('type', '=', 'service')->orderby('name', 'asc')->get();
        $sellernames = User::orderby('name', 'asc')->get();
        return view('layouts.admin_layout.service_edit',compact('servicedata','categories','sellernames'));
    }
    public function update_service(Request $request,$id){
        $data = $request->all();
        // echo '<pre>';print_r($data);exit();
        $servicedata = Service::find($id);
        $servicedata->type = $request->type ;        
        $servicedata->seller_name = $request->seller_name;
        $servicedata->category_id = $request->category_id;
        $servicedata->address = $request->address;
        $servicedata->phone= $request->phone;
        $servicedata->is_whatsapp=$request->is_whatsapp;
        $servicedata->price=$request->price;
        $servicedata->unit=$request->unit;
        $servicedata->features=$request->features;
        $servicedata->payment_mode =$request->payment_mode;
        $servicedata->service_highlight=$request->service_highlight;
        $servicedata->from_date=$request->from_date;
        $servicedata->to_date=$request->to_date;
        $servicedata->status=$request->status;
        $servicedata->question = implode(',',$data['question']);
        $servicedata->answer = implode(',',$data['answer']);
        // $servicedata->order_quantity=$request->order_quantity;
        
        if($request->hasfile('image'))
        {
            $destination ="uploads/category/".$servicedata->image;
            if (File::exists($destination)) {
               File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/category/', $filename);
            $servicedata->image = $filename;
        }
        $servicedata->update();
        return redirect('/list-service')->with('status', 'Data updated successfully');
    }
    public function deleteService($id){
        $clinicdata = Service::find($id);
        $destination ="uploads/service/".$clinicdata->image;
        if (File::exists($destination)) {
            File::delete($destination);
         }
         $clinicdata->delete();
         return redirect('/list-service')->with('status', 'Data deleted successfully');
    }
    public function deleteProduct($id){
        $clinicdata = Product::find($id);
        $destination ="uploads/product/".$clinicdata->image;
        if (File::exists($destination)) {
            File::delete($destination);
         }
         $clinicdata->delete();
         return redirect('/list-product')->with('status', 'Data deleted successfully');
    }
    // Product Service code end
    
}
