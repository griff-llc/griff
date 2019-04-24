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

Route::get('/',"UserController@landing_page");
Route::post('/register',"UserController@register");
Route::post('/login',"UserController@login");

Route::get('/dashboard',"BusinessController@dashboard")->name('dashboard');
Route::get('/profile',"BusinessController@profile");
Route::get('/signOut',"BusinessController@signOut")->name('signout');

Route::get('/add-property',"BusinessController@addPropertyPage")->name('add-property');
Route::post('/create-property',"BusinessController@createProperty");
Route::post('/update-property',"BusinessController@updateProperty");


Route::get('/properties',"BusinessController@propertyPage")->name('properties');
Route::get('/property-detail',"BusinessController@propertyDetail");
Route::get('/property-remove',"BusinessController@propertyRemove");
Route::get('/property-edit',"BusinessController@propertyEdit");

Route::get('/search',"BusinessController@search");


Route::get('/settings',"ManageController@settingsPage")->name('settings');
Route::post('/change-personal',"ManageController@changePersonal");
Route::post('/change-password',"ManageController@changePassword");

Route::get('/about-us',"ManageController@aboutusPage")->name('about-us');
Route::get('/contact-us',"ManageController@contactusPage")->name('contact-us');
