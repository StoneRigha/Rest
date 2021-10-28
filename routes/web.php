<?php

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Admincontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


//use App\Http\Controllers\homeController;


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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/',[homeController::class,'index']);


Route::get('/redirect',[homeController::class,'redirect']);
Route::get('/users',[AdminController::class,'user']);
Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);
Route::get('/food',[AdminController::class,'food']);
Route::post('/uploadfood',[AdminController::class,'upload']);
Route::get('/deletemenu/{id}',[Admincontroller::class, 'deletemenu']);
Route::get('/updateview/{id}',[Admincontroller::class, 'updateview']);
Route::post('/update{id}', [Admincontroller::class, 'update']);
Route::post('/reservation', [Admincontroller::class, 'reservation']);
Route::get('/viewreservation',[Admincontroller::class, 'viewreservation']);
Route::get('/viewchef', [Admincontroller::class, 'viewchef']);
Route::post('/uploadchef', [Admincontroller::class, 'uploadchef']);
Route::get('/updatechef/{id}',[Admincontroller::class, 'updatechef']);
Route::post('/updatefoodchef/{id}',[Admincontroller::class, 'updatefoodchef']);
Route::get('/deletechef/{id}',[Admincontroller::class, 'deletechef']);
Route::post('/addcart/{id}', [Homecontroller::class, 'addcart']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
