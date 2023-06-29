<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 * route "/login"
 * @method "POST"
 */
Route::post('/login', App\Http\Controllers\api\LoginController::class)->name('login');

/**
 * route "/user"
 * @method "GET"
 */
Route::group(['middleware' => ['auth:api']], function () {

Route::get('Category',[\App\Http\Controllers\api\api_category_Controller::class,'index']);
Route::post('Category',[\App\Http\Controllers\api\api_category_Controller::class,'store']);
Route::put('Category/{id}',[\App\Http\Controllers\api\api_category_Controller::class,'update']);
Route::delete('Category/{id}',[\App\Http\Controllers\api\api_category_Controller::class,'destroy']);

Route::get('Rooms',[\App\Http\Controllers\api\api_rooms_Controller::class,'index']);
Route::post('Rooms',[\App\Http\Controllers\api\api_rooms_Controller::class,'store']);
Route::put('Rooms/{id}',[\App\Http\Controllers\api\api_rooms_Controller::class,'update']);
Route::delete('Rooms/{id}',[\App\Http\Controllers\api\api_rooms_Controller::class,'destroy']);

Route::get('RoomSchedule',[\App\Http\Controllers\api\api_addRoom_Controller::class,'index']);
Route::post('RoomSchedule',[\App\Http\Controllers\api\api_addRoom_Controller::class,'store']);
Route::put('RoomSchedule/{id}',[\App\Http\Controllers\api\api_addRoom_Controller::class,'update']);
Route::delete('RoomSchedule/{id}',[\App\Http\Controllers\api\api_addRoom_Controller::class,'destroy']);

Route::get('RoomBooking',[\App\Http\Controllers\api\api_booking_controller::class,'index']);
Route::post('RoomBooking',[\App\Http\Controllers\api\api_booking_controller::class,'store']);
Route::put('RoomBooking/{id}',[\App\Http\Controllers\api\api_booking_controller::class,'update']);
Route::delete('RoomBooking/{id}',[\App\Http\Controllers\api\api_booking_controller::class,'destroy']);

Route::get('Staff',[\App\Http\Controllers\api\api_staff_controller::class,'index']);
Route::post('Staff',[\App\Http\Controllers\api\api_staff_controller::class,'store']);
Route::put('Staff/{id}',[\App\Http\Controllers\api\api_staff_controller::class,'update']);
Route::delete('Staff/{id}',[\App\Http\Controllers\api\api_staff_controller::class,'destroy']);

Route::get('RoomMaintenance',[\App\Http\Controllers\api\api_maintenance_controller::class,'index']);
Route::post('RoomMaintenance',[\App\Http\Controllers\api\api_maintenance_controller::class,'store']);
Route::put('RoomMaintenance/{id}',[\App\Http\Controllers\api\api_maintenance_controller::class,'update']);
Route::delete('RoomMaintenance/{id}',[\App\Http\Controllers\api\api_maintenance_controller::class,'destroy']);

Route::post('/logout', App\Http\Controllers\api\LogoutController::class)->name('logout');

});

