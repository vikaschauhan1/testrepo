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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index','IndexController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() 
{

    Route::group(['prefix' => 'group'], function() 
    {
        Route::get('/groups', 'GroupController@groups')->name('groups');
        Route::get('/list', 'GroupController@groupList')->name('group-list');
        Route::get('/group-management','GroupController@view')->name('group.view-group');
        Route::post('/postGroup','GroupController@postGroup')->name('group.post-group');
        Route::get('/create-group','GroupController@createGroup')->name('group.create-group');
        Route::get('/edit-group/{id}','GroupController@groupEdit')->name('group.edit-group');
        Route::get('/group-details/{id}','GroupController@groupDetails')->name('group.group-details');
        Route::post('/updateGroup','GroupController@postUpdateGroup')->name('group.update-group');
        Route::get('/export-data/{id}','GroupController@exportData')->name('group.export-data');
        Route::get('/copy-group/{id}','GroupController@copyGroup')->name('group.copy-group');
        Route::delete('/delete-group/{id}', 'GroupController@deleteGroup')->name('delete-group');

    });

    Route::group(['prefix' => 'template'], function()
    {
        Route::get('/list', 'TemplateController@templateList')->name('template.view-template');
        Route::get('/create-template', 'TemplateController@createTemplate')->name('template.create-template');
        Route::get('/edit-template', 'TemplateController@edittemplate')->name('template.edit-template');

    });



    Route::group(['prefix' => 'broadcast'], function()
    {
        Route::get('/list', 'BroadcastController@broadcastList')->name('broadcast.view-broadcast');
        Route::get('/create-broadcast', 'BroadcastController@createBroadcast')->name('broadcast.create-broadcast');
        Route::get('/broadcast-preview', 'BroadcastController@broadcastPreview')->name('broadcast.broadcast-preview');
        Route::get('/edit-broadcast', 'BroadcastController@editBroadcast')->name('broadcast.edit-broadcast');
        Route::get('/broadcast-details', 'BroadcastController@broadcastDetails')->name('broadcast.broadcast-details');

    });

     
     /*  Broadcast Report Summary   */

    Route::group(['prefix' => 'report'], function()
    {
        Route::get('/broadcast-summary', 'BroadcastReportController@broadcastSummary')->name('broadcast.broadcast-summary');
        Route::get('/user-broadcast-detail', 'BroadcastReportController@userBroadcastDetail')->name('broadcast.user-broadcast-detail');
        Route::get('/detailed-report', 'BroadcastReportController@broadcastDetailedReport')->name('broadcast.detailed-report');
        Route::get('/broadcast-detail-report', 'BroadcastReportController@broadcastWiseDetailedReport')->name('broadcast.broadcast-detail-report');
        Route::get('/user-broadcast-report', 'BroadcastReportController@broadcastWiseDetailedReport')->name('broadcast.user-broadcast-report');
        Route::get('/failed-reason', 'BroadcastReportController@broadcastFailedReason')->name('broadcast.failed-reason');
    });

    Route::get('/notification', 'NotificationController@notification')->name('notification');
    Route::get('country-codes', 'GroupController@countryCodes')->name('country-codes');
    Route::get('/update-profile', 'NotificationController@updateProfile')->name('update-profile');
    Route::post('/checkAvailability', 'GroupController@checkGroupAvailability')->name('check-group-availability');


});



