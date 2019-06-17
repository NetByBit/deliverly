<?php
use App\User;

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

/*
/login
/register
*/
Auth::routes();

Route::view('/', 'welcome');

Route::view('/driver-register', 'auth.driver-register')
    ->name('driver-register')
    ->middleware('guest');

Route::resource('orders', 'OrderController')->middleware('auth');

Route::post('orders/{order}/accept', 'OrderController@accept');
Route::post('orders/{order}/comment', 'OrderController@comment');
Route::post('orders/{order}/delivered', 'OrderController@delivered');

Route::get('profile/{user}', function(User $user) {
    return view('profile', compact('user'));
});
