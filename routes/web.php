<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthOtpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // return view('home.index');
// });

Auth::routes();
Route::get('/login-register', ['as'=>'login','uses'=> 'App\Http\Controllers\UserController@loginRegister']);
Route::post('/login', [App\Http\Controllers\UserController::class, 'loginUser']);
// Route::post('/register', [App\Http\Controllers\UserController::class, 'registerUser']);
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logoutUser']);
Route::get('/', [App\Http\Controllers\UserController::class, 'loginRegister']);

// email verification
Route::get('/confirm/{code}',[App\Http\Controllers\UserController::class, 'confirmAccount']);
Route::post('/confirm/{code}',[App\Http\Controllers\UserController::class, 'confirmAccount']);
// email verification

// For normal otp verification without sending to mobile start
Route::controller(AuthOtpController::class)->group(function(){
    Route::get('/otp/login', 'login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});
// For normal otp verification without sending to mobile end
Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware' => ['verified']], function() {
        /**
         * Dashboard Routes
         */
        Route::get('/dashboard', function () {
            return view('home.index');
        });
    });
    
    
    // Route::get('/dashboard', function () {
    //     return view('home.index');
    // })->middleware(['verified']);
    
    // seller code start
    Route::get('/seller-edit/{id}',[App\Http\Controllers\UserController::class, 'editSeller']);
    Route::delete('/seller-delete/{id}',[App\Http\Controllers\UserController::class, 'deleteSeller']);
    
    Route::post('/user/account',[App\Http\Controllers\UserController::class, 'account']);
    Route::get('/add-seller',[App\Http\Controllers\UserController::class, 'addSeller']);
    Route::get('/list-seller',[App\Http\Controllers\UserController::class, 'listSeller']);
    Route::post('/save-seller',[App\Http\Controllers\UserController::class, 'save_seller']);
    Route::put('update-seller/{id}',[App\Http\Controllers\UserController::class, 'updateSeller']);

    Route::get('/impersonate/user/{email}',[App\Http\Controllers\ImpersonateController::class, 'impersonate']);
    Route::post('/email_available_check',[App\Http\Controllers\UserController::class,'email_available_check']); 
    // seller code end

    // Master Category code start
    Route::get('/add-category',[App\Http\Controllers\UserController::class,'add_category']);
    Route::get('/list-category',[App\Http\Controllers\UserController::class,'list_category']);   
    Route::get('/filtercategory',[App\Http\Controllers\UserController::class,'filtercategory']);   
   
    Route::delete('/category-delete/{id}',[App\Http\Controllers\UserController::class, 'delete_category']);
    
    Route::post('/category-create', [App\Http\Controllers\UserController::class, 'createCategory']);

    Route::get('category/edit/{id}', [App\Http\Controllers\UserController::class, 'editCategory'])->name('editCategory');

    Route::put('/update-category/{id}',[App\Http\Controllers\UserController::class, 'save_category']);
    // Master Category code  code end
// Manage Role and permission start
Route::resource('permissions',\App\Http\Controllers\PermissionController::class);
Route::resource('roles',\App\Http\Controllers\RoleController::class);
Route::resource('users',\App\Http\Controllers\UsermanagementController::class);
// Manage Role and permission end

// Product service code start

Route::get('/add-product-service',[App\Http\Controllers\UserController::class,'add_product_service']);
Route::post('/save-product-service',[App\Http\Controllers\UserController::class,'save_product_service']);
Route::post('/getSellers',[App\Http\Controllers\UserController::class,'getSellers']);
Route::get('/list-service',[App\Http\Controllers\UserController::class,'list_service']);  
Route::get('/list-product',[App\Http\Controllers\UserController::class,'list_product']);
Route::get('/product-edit/{id}', [App\Http\Controllers\UserController::class, 'product_edit']); 
Route::post('/getProductcategory', [UserController::class, 'getProductcategory'])->name('getProductcategory'); 
Route::post('/getServicecategory', [UserController::class, 'getServicecategory'])->name('getServicecategory'); 
Route::get('/productstschange',[App\Http\Controllers\UserController::class,'productstschange']);
Route::get('/servicestschange',[App\Http\Controllers\UserController::class,'servicestschange']);
Route::put('/update-product/{id}',[App\Http\Controllers\UserController::class,'update_product']);
Route::get('/service-edit/{id}', [App\Http\Controllers\UserController::class, 'service_edit']); 
Route::put('/update-service/{id}', [App\Http\Controllers\UserController::class, 'update_service']); 
Route::delete('/product-delete/{id}', [App\Http\Controllers\UserController::class, 'deleteProduct']); 
Route::delete('/service-delete/{id}', [App\Http\Controllers\UserController::class, 'deleteService']); 
// Product service code end



// verifiy-email

// working email send  but hold pause for now
    Route::get('/email/verify', [App\Http\Controllers\VerificationController::class,'show'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\VerificationController::class,'verify'])->name('verification.verify')->middleware(['signed']);
    Route::post('/email/resend', [App\Http\Controllers\VerificationController::class,'resend'])->name('verification.resend');
// working email send  but hold pause for now

   
// verifiy-email

});
Route::get('/impersonate/destroy',[App\Http\Controllers\ImpersonateController::class, 'destroy']);

// Frontend section
Route::get('/fontend-home',[App\Http\Controllers\Frontend\FrontendController::class,'home']);
Route::get('/frontend-register',[App\Http\Controllers\Frontend\FrontendController::class,'register']);
Route::post('/save-frontend-seller',[App\Http\Controllers\Frontend\FrontendController::class,'save_frontend_seller']);
//end Frontend section

// Frontend customer section
Route::get('/fontend-home',[App\Http\Controllers\CustomerController::class,'home']);
Route::get('/customer-register',[App\Http\Controllers\CustomerController::class,'register']);
Route::post('/save-customer',[App\Http\Controllers\CustomerController::class,'save_customer']);
//end Frontend customer section