<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

   Route::get('/', [
             'uses' => 'LoginController@getWelcome',
                'as' => 'welcome'
            ]);

   Route::get('/login', [
        'uses' => 'LoginController@getLogin',
        'as' => 'getlogin'
    ]);

   Route::post('/login', [
        'uses' => 'LoginController@postLogin',
        'as' => 'postlogin'
    ]);

   Route::get('/logout', [
        'uses' => 'LoginController@getLogout',
        'as' => 'getlogout'
        ]);      

    Route::group(['middleware' => 'auth'], function () {
        
     /*   Route::get('/countpc', [
             'uses' => 'LoginController@CountpcRun',
                'as' => 'countpc'
            ]);
     */       
        Route::get('/test', [
            'uses' => 'LoginController@testRun',
            'as' => 'test'
        ]);
    
       Route::get('/labdetails', [
            'uses' => 'LoginController@labDetails',
            'as' => 'labdetails'
        ]);
     
       Route::post('/showlabdetails', [
            'uses' => 'LoginController@showLabDetails',
            'as' => 'showlabdetails'
        ]);
        
    //   Route::get('/updatelabdetails', [
    //         'uses' => 'LoginController@updateLabDetails',
    //         'as' => 'updatelabdetails'
    //     ]);      
  //  Route::get('/updatelabdetails', 'HomeController@me');
      Route::get('updatelabdetails', 'LoginController@updateLabDetails');

       Route::post('/storelabdetails', [
            'uses' => 'LoginController@storeLabDetails',
            'as' => 'storelabdetails'
        ]); 
        
        Route::get('/labinfos', [
            'uses' => 'LoginController@labInfo',
            'as' => 'labinfos'
        ]);
             
       Route::get('/student', [
            'uses' => 'LoginController@getStudent',
            'as' => 'getstudent'
        ]);
        
       Route::post('/showstudent', [
            'uses' => 'LoginController@showStudent',
            'as' => 'showstudent'
        ]);       

        Route::get('/mailpass', [
            'uses' => 'LoginController@getMailpass',
            'as' => 'mailpass'
        ]);


   });