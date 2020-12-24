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


// Dynamic Web Routes
Route::namespace('Web')->group(function () {

    // Home
    Route::get('/','HomeController@index')->name('home');
    Route::get('/prescription/{reg_id}','HomeController@download')->name('download');

    // Health Blog
    Route::get('blog/{slug}','BlogController@show')->name('blog.single');

    // Doctor Join
    Route::get('join','JoinController@index')->name('join.index');
    Route::post('join/doctor','JoinController@register')->name('join.doctor');

    // Probability Test
    Route::get('online-test','TestingController@search')->name('testing.search');
    Route::post('online-test','TestingController@result')->name('testing.result');

    // Survey
    Route::get('survey','SurveyController@index')->name('survey.index');
    Route::post('survey','SurveyController@store')->name('survey.store');

    // Search
    Route::get('search','SearchController@index')->name('search.index');
    Route::post('search','SearchController@store')->name('search.store');
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

    // Testing Priorities
    Route::resource('testing-priority','TestingPriorityController');

    // Testing Reports
    Route::resource('testing-report','TestingReportController');

    // Survey
    Route::resource('survey','SurveyController');

    // Patients
    Route::resource('patient','PatientController');

    // Roles And Permission Routes
    Route::resource('role','RoleController');

    // Users
    Route::resource('user','UserController');

    // Profile Routes
    Route::get('profile', 'ProfileController@index')->name('profile.index');
    Route::post('profile/store', 'ProfileController@store')->name('profile.store');
    Route::post('profile/changePass', 'ProfileController@changePass')->name('profile.changePass');
});