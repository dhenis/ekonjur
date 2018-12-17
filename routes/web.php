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

Route::resource('/apply', 'ProjectController');



Route::resource('/opening', 'OpeningController');


Route::get('/', function () {
    return view('index');
});


// Route::resource('/one', 'OneController',['except'=>['index']]);
Route::resource('/one', 'OneController');

/**
 * route for rorm in stage one
 */

// Route::get('controllerMethod/{key}', $controller . 'controllerMethod');
Route::get('one/{id}/form', ['as' => 'one.form', 'uses' => 'OneController@form']);

/**
 * route for rorm in stage two
 */
// Route::get('controllerMethod/{key}', $controller . 'controllerMethod');
// Route::get('two/{id}/form', ['as' => 'one.form', 'uses' => 'TwoController@form']);


// Route::resource('/two', 'TwoController');

Route::resource('/crews','CrewsController');

Route::get('crews/{id}/form',['as' => 'crews.form', 'uses' => 'CrewsController@form']);
Route::get('crews/{id}/form/{parts}/parts/{trd}', 'CrewsController@detailsdb'); // shortenend


// name : 
Route::get('crews/{id}/details/1/parts/', 'CrewsController@passportTravel')->name('crews.passportTravel'); // shortenend

Route::post('crews/details/1/parts/post', 'CrewsController@PassportTravelstore')->name('crews.PassportTravelstore'); 


Route::get('crews/{id}/details/2/parts/', 'CrewsController@PersonalDetailHistory')->name('crews.personalDetailHistory'); 
Route::post('crews/details/2/parts/post', 'CrewsController@PersonalDetailHistoryStore')->name('crews.PersonalDetailHistoryStore'); 


Route::get('crews/{id}/details/3/parts/', 'CrewsController@familyFriends')->name('crews.familyFriends'); 
Route::post('crews/details/3/parts/post', 'CrewsController@familyFriendsStore')->name('crews.familyFriendsStore'); 


Route::get('crews/{id}/details/4/parts/', 'CrewsController@educationEmployment')->name('crews.educationEmployment'); 
Route::post('crews/details/4/parts/post', 'CrewsController@educationEmploymentStore')->name('crews.educationEmploymentStore'); 


Route::get('crews/{id}/details/5/parts/', 'CrewsController@medical')->name('crews.medical'); 
Route::post('crews/details/5/parts/post', 'CrewsController@medicalStore')->name('crews.medicalStore'); 


// Route::get('crews/{id}/details/6/parts/', 'CrewsController@organisation')->name('crews.organisation'); 


Route::get('crews/{id}/details/main_menu/', [
    'as' => 'crews.details',
    'uses' => 'CrewsController@details' ]); // main menus


Route::get('timetable/datatables','TimeTableController@dataTable')->name('timetable.data');

Route::get('timetable/foo', 'TimeTableController@foo')->name('TimeTableController.foo'); 
    

// Route::resource('/one', 'OneController',['except'=>['index']]);
Route::resource('/timetable', 'TimeTableController');

Route::get('timetable/{id}/form',['as' => 'timetable.form', 'uses' => 'TimeTableController@form']);
// Route::get('timetable/{id}/form/{parts}/parts/{trd}', 'CrewsController@detailsdb'); // shortenend

