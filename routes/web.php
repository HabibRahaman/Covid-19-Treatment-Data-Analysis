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
    return view('web.index');
})->name('home');

Route::get('/post', function () {
    return view('web.post');
})->name('post');

Route::get('/form', function () {
    return view('web.form');
})->name('form');



Route::get('/search', function () {
    return view('web.search');
})->name('search');

Route::get('/online-test', function () {
    return view('web.online-test');
})->name('test');

Route::get('/join', function () {
    return view('web.join');
})->name('join');

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

    // Diseases
    Route::resource('disease','DiseaseController');

    // Symptoms
    Route::resource('symptom','SymptomController');

    // Medicines
    Route::resource('medicine','MedicineController');

    // Medical Conditions
    Route::resource('condition','MedicalConditionController');

    // Health Care
    Route::resource('healthcare','HealthCareController');

    // Blogs
    Route::resource('blog','BlogController');

    // Roles And Permission Routes
    Route::resource('role','RoleController');

    // Users
    Route::resource('user','UserController');

    // Profile Routes
    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::post('profile/store', 'ProfileController@store')->name('profile.store');
    Route::post('profile/changePass', 'ProfileController@changePass')->name('profile.changePass');
});




// Patient Auth Routes
Route::name('patient.')->namespace('Auth')->prefix('patient')->group(function () {

    Route::get('/login', 'PatientLoginController@showLoginForm')->name('login');
    Route::post('/login', 'PatientLoginController@login')->name('login.post');
    Route::get('/register', 'PatientRegisterController@showRegisterForm')->name('register');
    Route::post('/register', 'PatientRegisterController@register')->name('register.post');
    Route::post('/logout', 'PatientLoginController@logout')->name('logout');

    // Forgot Password Routes
    Route::get('/forgot-password', 'PatientForgotPasswordController@forgotPassword')->name('forgot-password');
    Route::post('/email-password', 'PatientForgotPasswordController@emailForgotPasswordLink')->name('email-password');
    Route::get('/verify-email/{id}/{token}', 'PatientForgotPasswordController@verifyEmail')->name('verify-email');
    Route::post('/reset-password', 'PatientForgotPasswordController@resetPassword')->name('reset-password');

});



Route::middleware(['patient'])->name('patient.')->namespace('Patient')->prefix('patient')->group(function() {
    // Route::get('/home', 'HomeController@index');

    
});