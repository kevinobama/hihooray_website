<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', ['as' => 'signin', 'uses' => 'Auth\AuthController@doLogin']);
    Route::get('logout', 'Auth\AuthController@getLogout');
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');

    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');

    Route::resource('microcourses', 'TeacherAdmin\MicroCoursesController');
    Route::resource('qiniu-token', 'TeacherAdmin\QiniuTokenController');
    Route::resource('teacher-files', 'TeacherAdmin\TeacherFilesController');

    Route::get('/teacher-files/in-progress/{id}', 'TeacherAdmin\TeacherFilesController@inProgress');
    Route::get('/teacher-files/in-progress-ajax/{id}', 'TeacherAdmin\TeacherFilesController@inProgressAjax');
});

