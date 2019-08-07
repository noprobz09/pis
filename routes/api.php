<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
* Authenticated Routes
*
*/
Route::group(['middleware'=>'auth'], function () { 

    Route::group(['prefix' => 'patient'], function () { 

		Route::post('/create', 'Api\Patient\PatientController@create')->name('api.patient.create');
		Route::get('/', 'Api\Patient\PatientController@get')->name('api.patient.get');
		Route::get('/{id}', 'Api\Patient\PatientController@profile')->name('api.patient.view');
		Route::patch('/update', 'Api\Patient\PatientController@update')->name('api.patient.update');
		Route::get('/evaluation/{type}/{id}', 'Api\Patient\PatientController@getEvaluation')->name('api.patient.evaluation');

	});

});