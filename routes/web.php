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

Route::get('/', function () {
    return view('welcome');
});


Route::get('registerUser', 'HomeController@getRegister')->name('register');
Route::get('loginUser', 'HomeController@getLogin')->name('login');
Route::post('registerUser', 'HomeController@postRegisterUser')->name('registerUser');
Route::post('loginUser', 'HomeController@postLoginUser')->name('loginUser');
Route::post('search', 'HomeController@search')->name('search');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('create', 'HomeController@create')->name('create');
Route::get('publicBooks', 'HomeController@getPublicBooks')->name('publicBooks');
Route::get('viewPublicPlace/{id}', 'HomeController@getViewPlace')->name('viewPublicPlace');



Route::group( ['middleware' => 'auth'], function(){

    Route::get('putEditPassword', array('uses' => 'HomeController@putEditPassword', 'as' => 'putEditPassword'));
    Route::post('logoutUser', 'HomeController@logoutUser');

    //admin routes
    Route::get('adminHome', 'AdminController@getAdminHome')->name('adminHome');
    Route::get('addPlace', 'AdminController@getAddPlace')->name('addPlace');
    Route::get('requests', 'AdminController@getRequests')->name('requests');
    Route::get('issueRequest', 'AdminController@getIssueRequest')->name('issueRequest');
    Route::get('viewPlace/{id}', 'AdminController@getViewPlace')->name('viewPlace');
    Route::get('deletePlace/{id}', 'AdminController@deletePlace')->name('deletePlace');
    Route::get('updatePlace/{id}', 'AdminController@getUpdatePlace')->name('updatePlace');
    Route::post('store', 'AdminController@store')->name('store');
    Route::get('putUpdatePlace/{id}', 'AdminController@putUpdatePlace' )->name('putUpdatePlace');
    Route::get('putIgnore/{id}', 'AdminController@putIgnore')->name('putIgnore');
    Route::get('putApprove/{id}', 'AdminController@putApprove')->name('putApprove');
    Route::get('putSuggestion/{id}', 'AdminController@putSuggestion')->name('putSuggestion');
    Route::get('edit/{id}', 'AdminController@edit')->name('edit');
    Route::put('edit/{id}', 'AdminController@update')->name('update');
    Route::get('delete/{id}', 'AdminController@delete')->name('delete');
    Route::get('putAdminIssueBook/{id}', 'AdminController@putAdminIssueBook' )->name('putAdminIssueBook');
    

	//Route::get('places/{name}', 'AdminController@getAdminPlaces')->name('places');
    Route::get('places/{name}', array('uses' => 'AdminController@getAdminPlaces', 'as' => 'places'));
    
    //user routes
    Route::get('userHome', 'UserController@getUserHome')->name('userHome');
    Route::post('postSuggest', 'UserController@postSuggest')->name('postSuggest'); 
    Route::get('createSuggestion', array('uses' => 'UserController@createSuggestion', 'as' => 'createSuggestion'));
    
    Route::get('viewUserPlace/{id}', 'UserController@getViewPlace')->name('viewUserPlace');
    Route::get('userUpdatePlace/{id}', 'UserController@getUpdatePlace')->name('userUpdatePlace');
    Route::put('putUserUpdatePlace/{id}', 'UserController@putUpdatePlace' )->name('putUserUpdatePlace');
    Route::put('putUserSuggestion/{id}', 'UserController@putUserSuggestion' )->name('putUserSuggestion');
    Route::get('putUserRequestBook/{id}', 'UserController@putUserRequestBook' )->name('putUserRequestBook');


});

