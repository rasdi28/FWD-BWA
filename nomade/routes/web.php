<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

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
//     return view('pages.home');
// });

Route::get('/','homeController@index');
Route::get('/detail','detailController@index');
Route::get('/checkout','checkoutController@index');
Route::get('/checkout/success','checkoutController@success');

Route::prefix('admin')->group(function(){
    Route::get('/','Admin\dashboardController@index')->name('dashboard');
});

Auth::routes();

