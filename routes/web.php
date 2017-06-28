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
define('prothesmiaday',30);


Route::get('/', function () {
    Session::flush();
    $today= getdate();
	// global $prothesmiaday;
	if($today['mday']<= prothesmiaday and $today['mon']==6 and $today['year']==2017 )	
    	return view('welcome');
    else
    	return view ('SiteisDown');
});

Route::get('applicants/{klados}','ApplicantController@index')->name('Applicants');
Route::get('searchform',function(){
	$today= getdate();
	
	if($today['mday']<= prothesmiaday and $today['mon']==6 and $today['year']==2017 )	
    	return view('searchform');
    else
    	return view ('SiteisDown');	
	

})->name('Searchform');

Route::post('search','ApplicantController@search')->name('Search');
Route::post('editapplicantchoices','ApplicantController@edit')->name('Editchoices');
Route::post('updateapplicantschoices', 'ApplicantController@update')->name('Updatechoices');
Route::get('show/{afm}/{at}','ApplicantController@show')->name('Show');

