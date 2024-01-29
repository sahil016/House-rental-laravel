<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RazorpayPaymentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\houseController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\ruleController;


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
//     return view('ragister');
// });


Route::get('/', function () {
    return view('welcome');
});


Route::get('/house', function () {
    return view('list2');
});


// Route::get('/book', function () {
//     return view('booking2');
// });

Route::get('/login',[UserController::class,'login']);
Route::post('login-user',[UserController::class,'loginUser'])->name('login-user');

Route::get('/dashboard',[UserController::class,'dashboard']);

Route::get('/logout',[UserController::class,'logout']);

Route::post('/user',[UserController::class,'userLogin']);
Route::get('destroy',[UserController::class,'destroyuser'])->name('destroy');



// Route::get('/ah', function () {
//     return view('ah');
// });


Route::get('/ah',[UserController::class,'header']);

Route::get('/br', function () {
    return view('br');
});

Route::get('/su', function () {
    return view('su');
});

Route::get('/detail', function () {
    return view('detail');
});

// Route::get('/book2', function () {
//     return view('booking2');
// });


Route::view('book','booking2');
Route::post('book',[App\Http\Controllers\bookingController::class,'user_booking']);

Route::get('/pay', function () {
    return view('pay');
});


// Route::get('/pay2', function () {
//     return view('pay2');
// });


// 

Route::get('hi',[PaymentController::class,'yo']);


// house detail-----------------------------------------------

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail2', function () {
    return view('detail2');
});

Route::get('/detail3', function () {
    return view('D/detail3');
});

Route::get('/detail4', function () {
    return view('D/detail4');
});

Route::get('/detail5', function () {
    return view('D/detail5');
});

Route::get('/detail5', function () {
    return view('D/detail5');
});

Route::get('/detail6', function () {
    return view('D/detail6');
});

Route::get('/detail7', function () {
    return view('D/detail7');
});

Route::get('/detail8', function () {
    return view('D/detail8');
});

Route::get('/detail9', function () {
    return view('D/detail9');
});

Route::get('/detail10', function () {
    return view('D/detail10');
});

Route::get('/detail11', function () {
    return view('D/detail11');
});

Route::get('/detail12', function () {
    return view('D/detail12');
});

Route::get('/ad', function () {
    return view('admin2');
});


Route::get('/admin',[App\Http\Controllers\adminController::class,'admin']);
Route::post('login-admin',[App\Http\Controllers\adminController::class,'loginAdmin'])->name('login-admin');
Route::get('admindashboard',[App\Http\Controllers\adminController::class,'admindashboard']);

Route::get('destroy-session',[adminController::class,'destroy']);
// house detail-----------------------------------------------


Route::get('/manage-user', function () {
    return view('admin/muser');
});
Route::post('/manage-user',[UserController::class,'show']);


Route::get('/rul', function () {
    return view('D/rule');
});


Route::get('/admin3', function () {
    return view('admin3');
});

// Route::get('/admin', function () {
//     return view('admin4');
// });


Route::get('/user', function () {
    return view('tables');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::view('register','register');
Route::post('register',[UserController::class,'register']);

Route::view('pay','pay');
Route::post('pay',[UserController::class,'pay']);


Route::get('/home', function () {
    return view('home1');
});

Route::get('/list9', function () {
    return view('house-add');
});

Route::post('/list9',[houseController::class,'addHouse']);
Route::get('/list9',[houseController::class,'house']);

Route::get('/u',function(){
    $user=user::all();
    echo "<pre>";
    print_r($user->toArray());
});
Route::get('delete/{id}',[UserController::class,'destroy']);
Route::get('list',[UserController::class,'show']);


// This route is for payment initiate page
// Route::get('/payment-initiate',function(){
//     return view('payment-initiate');
// });

Route::view('/payment','payment-initiate');

// for Initiate the order
Route::post('/payment-initiate-request','App\Http\Controllers\PaymentController@Initiate');

// for Payment complete
Route::post('/payment-complete',[App\Http\Controllers\PaymentController::class,'Complete']);

Route::get('/admin/addHouse', function () {
    return view('addHouse');
});

Route::get('other',[houseController::class,'house']);

// Route::get('/admin/manage-house', function () {
//     return view('m-house');
// });



Route::get('/manage-booking',[bookingController::class,'show']);

Route::get('/manage-house',[houseController::class,'show']);

Route::get('/rules',[ruleController::class,'show']);

Route::get('/admin/manage-rule', function () {
    return view('m-rule');
});

Route::get('/manage-rule',[ruleController::class,'show2']);
Route::post('/manage-rule-store',[ruleController::class,'store']);
