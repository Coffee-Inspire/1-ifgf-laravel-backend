<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('admins', 'AdminController@index');

Route::group(['middleware' => 'cors'], function(){

    // Route::post('admin', 'AdminController@store');   //Create User manual (pass not hash)
    // Route::get('admin', 'AdminController@index');

    //Auth Admin
    Route::post('admin/login', 'AdminController@login');
    Route::post('admin/register', 'AdminController@register');
    Route::get('admin/logout', 'AdminController@logout');

    //GET DATA
    Route::get('about', 'AboutController@index');
    Route::get('profileweb', 'ProfileWebController@index');
    Route::get('event', 'EventController@index');
    Route::get('icare', 'IcareController@index');
    Route::get('category', 'CategoryController@index');
    Route::get('footer', 'FooterController@index');

    Route::group(['middleware' => 'jwt'], function(){

        //testing only
        // Route::get('admin/{admin}', 'AdminController@show');
        Route::get('admin/getuser', 'AdminController@getUser');


        // GET UNIQUE
        Route::get('about/nextid', 'AboutController@getNextUserID');

        //POST
        Route::post('about', 'AboutController@store');
        // Route::post('footer', 'FooterController@store');
        // Route::post('profileweb', 'ProfileWebController@store');
        // Route::post('event', 'EventController@store');
        // Route::post('icare', 'IcareController@store');
        // Route::post('category', 'CategoryController@store');

        //PUT
        Route::put('admin', 'AdminController@update');
        Route::put('about/{id}', 'AboutController@update');
        Route::put('profileweb/{id}', 'ProfileWebController@update');
        Route::put('event/{id}', 'EventController@update');
        Route::put('icare/{id}', 'IcareController@update');
        Route::put('category/{id}', 'CategoryController@update');
        Route::put('footer/{id}', 'FooterController@update');

        
        // DELETE
        Route::delete('about/{id}', 'AboutController@delete');
         
    });

});

