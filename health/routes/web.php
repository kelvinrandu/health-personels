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
    return view('create');
});

//get index
Route::get('/index', [
    'uses' => 'ProfessionalController@index',
    'as' => 'index'
    ]);
//create record
Route::post('/record/make/', [
'uses' => 'ProfessionalController@create',
'as' => 'create.record'
]);

//updates record
Route::get('/record/show/{id}', [
'uses' => 'ProfessionalController@show',
'as' => 'show.record'
    ]);

//updates record
Route::post('/record/update/{id}', [
'uses' => 'ProfessionalController@update',
'as' => 'update.record'
]);

//delete record
Route::get('/record/delete/{id}', [
'uses' => 'ProfessionalController@delete',
'as' => 'delete.record'
 ]);

 //sort record
Route::get('/record/sort/', [
'uses' => 'ProfessionalController@sort',
'as' => 'sort.record'
]);

