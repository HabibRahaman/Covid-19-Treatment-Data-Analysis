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


// Static Web Routes
Route::get('/', function () {
    return view('web.index');
})->name('home');

Route::get('/post', function () {
    return view('web.post');
})->name('post');

Route::get('/form', function () {
    return view('web.form');
})->name('form');


Route::get('/survey', function () {
    return view('web.survey');
})->name('survey');

Route::get('/search', function () {
    return view('web.search');
})->name('search');

Route::get('/online-test', function () {
    return view('web.online-test');
})->name('test');

Route::get('/join', function () {
    return view('web.join');
})->name('join');



// Dynamic Web Routes
Route::namespace('Web')->group(function () {

    // Health Blog
    Route::get('blog/{slug}','BlogController@show')->name('blog.single');
    Route::post('join/doctor','JoinController@register')->name('join.doctor');
    Route::get('online-test','TestingController@search')->name('testing.search');
    Route::post('online-test','TestingController@result')->name('testing.result');
});


// Authentication Routes
Route::group(['prefix' => 'dashboard'], function() {
	// Auth::routes();
    Route::auth(['register' => false]);
});



Route::middleware(['auth'])->namespace('Admin')->group(function () {

    //Dashboard Routes
    Route::get('dashboard/index', 'DashboardController@index')->name('dashboard.index');
});


// Admin Panel Routes
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

    // Testing Diseases
    Route::resource('testing-disease','TestingDiseaseController');

    // Testing Symptoms
    Route::resource('testing-symptom','TestingSymptomController');

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


});

Route::middleware(['patient'])->name('patient.')->namespace('Patient')->prefix('patient')->group(function() {
    
    
});