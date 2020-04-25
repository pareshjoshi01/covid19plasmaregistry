<?php

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


Route::get('/', 'SiteController@index')->name('welcome');

Route::get('/donor/register', 'SiteController@donor_register')->name('donor_register');
Route::post('/donor/save', 'SiteController@save_donor_details')->name('donor_save');
Route::get('/donor/{id}/otp/verification', 'SiteController@donor_otp_verification')->name('donor_otp_verification');
Route::post('/donor/{id}/otp/verify', 'SiteController@donor_otp_verify')->name('donor_otp_verify');
Route::get('/donor/thankyou', 'SiteController@donor_thankyou')->name('donor.thankyou');

Route::get('/donor/find', 'SiteController@find_donor')->name('find_donor');
Route::post('/seeker/save', 'SiteController@save_seeker_details')->name('seeker_save');
Route::get('/seeker/{id}/otp/verification', 'SiteController@seeker_otp_verification')->name('seeker_otp_verification');
Route::post('/seeker/{id}/otp/verify', 'SiteController@seeker_otp_verify')->name('seeker_otp_verify');
Route::get('/seeker/thankyou', 'SiteController@seeker_thankyou')->name('seeker.thankyou');

Route::get('/volunteer/contact', 'SiteController@volunteer_contact')->name('volunteer_contact');
Route::post('/volunteer/contact/save', 'SiteController@volunteer_contact_save')->name('volunteer_contact_save');

Route::get('/about', 'SiteController@about')->name('about');

/*
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
*/
