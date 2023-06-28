<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\test;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => ['auth']], function() {
    Route::prefix('admin')->group(function (){
        // Route::get('/user/home', [App\Http\Controllers\WebController::class, 'home']);
        // Route::get('/dashboard',function(){
        //     return view('admin');
        // });
        Route::get('/dashboard',[App\Http\Controllers\WebController::class,'admin']);

    });
});

// Route::get('/logins', function () {
//     return view('login');
// });

// Route::get('/admin', function () {
//     return view('admin');
// });

Route::get('/booking', function () {
    return view('booking');
});

Auth::routes([
    // 'register' => false,
    // 'confirm' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/Category', App\Http\Controllers\category_Controller::class);
Route::resource('admin/AddRoom', App\Http\Controllers\addRoomController::class);
Route::resource('admin/Rooms', App\Http\Controllers\rooms_Controller::class);
Route::resource('admin/Booking', App\Http\Controllers\booking_Controller::class);
Route::resource('admin/Staff', App\Http\Controllers\staff_Controller::class);
Route::resource('admin/Maintenance', App\Http\Controllers\maintenance_Controller::class);

Route::get('test',[Test::class,'index']);
