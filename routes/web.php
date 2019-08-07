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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

/**
* Authenticated Routes
*
*/
Route::group(['middleware'=>'auth'], function () { 

	Route::get('/home', 'HomeController@index')->name('home');

	/* patients */
	Route::group(['prefix' => 'patient'], function () { 

		//Route::get('/', 'Patient\PatientController@lists')->name('patient.lists');
		Route::get('/add', 'Patient\PatientController@add')->name('patient.add');
		Route::post('/submit', 'Patient\PatientController@submit')->name('patient.add.post');
		Route::get('/lists', 'Patient\PatientController@lists')->name('patient.lists');
		Route::get('/view/{id}', 'Patient\PatientController@view')->name('patient.view');

	});


	/* evaluation */
	Route::group(['prefix' => 'evaluation'], function () { 

		//Route::get('/', 'Evaluation\EvaluationController@lists')->name('evaluation.lists');
		Route::get('/initial', 'Evaluation\EvaluationController@initial')->name('evaluation.initial');
		Route::get('/coordination-balance', 'Evaluation\EvaluationController@balance')->name('evaluation.balance');

	});

	/* evaluation */
	Route::group(['prefix' => 'analytics'], function () { 

		Route::get('/patients-per-month', 'Analytics\AnalyticsController@patient')->name('analytics.patient');
		

	});


	/* to prevent 404 issue for vuejs route reload */
	Route::get('{any}', function () {
		return view('pages.home.index');
	})->where('any','.*');

});

