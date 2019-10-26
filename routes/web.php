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

Route::get('/', 'PackagesController@home');


Route::get('packages', 'PackagesController@get_all');
Route::get('about', function(){
    return view('layout/about');
});
Route::get('contact',function (){
    return view('layout/contact');
});

Route::get('custom_packages',function (){
    return view('layout/custompackages');
});

Route::get('package_details',function (){
    return view('layout/packagedetails');
});


Route::get('hotels', function (){
    return view('layout/coming_soon');
});


Route::get('car_rentals', function (){
    return view('layout/coming_soon');
});


