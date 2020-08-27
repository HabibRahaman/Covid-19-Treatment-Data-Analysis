<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');



// Set Lang Version
Route::get('locale/{locale}', function ($locale){
    if (! in_array($locale, ['en', 'bn'])) {
        abort(404);
    }

    Session::put('locale', $locale);

    return redirect()->back();
})->name('version');


Route::get('welcome/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'bn'])) {
        abort(404);
    }

    App::setLocale($locale);

    //
    return $locale = App::getLocale();
});



//Admin panel 
Route::get('/dashboard/form', function () {
    return view('dashboard.form');
});
Route::get('/dashboard/table', function () {
    return view('dashboard.table');
});



Route::group(['prefix' => 'dashboard'], function() {
	Auth::routes();
    // Route::auth(['register' => false]);
});



Route::middleware(['auth'])->namespace('Admin')->group(function () {

    //Dashboard Routes
    Route::get('dashboard/index', 'DashboardController@index')->name('dashboard.index');
});



Route::middleware(['auth'])->name('admin.')->namespace('Admin')->prefix('admin')->group(function () {

    // Disease
    Route::resource('disease','DiseaseController');

    // Symptoms
    Route::resource('symptom','SymptomController');

    // Roles And Permission Routes
    Route::resource('role','RoleController');

    // Users
    Route::resource('user','UserController');

    // Profile Routes
    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::post('profile/store', 'ProfileController@store')->name('profile.store');
    Route::post('profile/changePass', 'ProfileController@changePass')->name('profile.changePass');
});




// Customer Auth Routes
Route::name('customer.')->namespace('Auth')->prefix('customer')->group(function () {

    Route::get('/login', 'CustomerLoginController@showLoginForm')->name('login');
    Route::post('/login', 'CustomerLoginController@login')->name('login.post');
    Route::get('/register', 'CustomerRegisterController@showRegisterForm')->name('register');
    Route::post('/register', 'CustomerRegisterController@register')->name('register.post');
    Route::post('/logout', 'CustomerLoginController@logout')->name('logout');

    // Forgot Password Routes
    Route::get('/forgot-password', 'CustomerForgotPasswordController@forgotPassword')->name('forgot-password');
    Route::post('/email-password', 'CustomerForgotPasswordController@emailForgotPasswordLink')->name('email-password');
    Route::get('/verify-email/{id}/{token}', 'CustomerForgotPasswordController@verifyEmail')->name('verify-email');
    Route::post('/reset-password', 'CustomerForgotPasswordController@resetPassword')->name('reset-password');

});



Route::middleware(['customer'])->name('customer.')->namespace('Customer')->prefix('customer')->group(function() {
    // Route::get('/home', 'HomeController@index');

    
});