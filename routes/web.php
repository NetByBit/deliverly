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
Route::view('/driver-register', 'auth.driver-register');

Route::resource('orders', 'OrderController')->middleware('auth');
// Route::view('orders/driver', 'orders.driver')->middleware('auth');

Route::get('drivers', function() {
    $users = User::where('type', 'driver')->get();

    return view('drivers', compact('users'));
});


Route::get('profile/{user}', function(User $user) {
    return view('profile', compact('user'));
});
