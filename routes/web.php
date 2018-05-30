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


Auth::routes();

Route::get('/', 'HomeController@index');

Route::middleware(['auth'])->group(function () {

    Route::get('/projects', 'ProjectController@show');

    Route::prefix('choice')->group(function () {
        Route::get('/', function () {
            return view('choice.info');
        });

        Route::get('/create-project', function () {
            return view('choice.create-project');
        });

        Route::post('/create-project', 'ProjectController@store');

        Route::post('/calculate', 'ProjectController@calculateDistance');
    });

    Route::prefix('guide')->group(function (){

        Route::get('/info', function () {
            return view('guide.info');
        });

        Route::get('/principles', function () {
            return view('guide.principles');
        });

        Route::get('/life-cycles', function () {
            return view('guide.cycle');
        });

        Route::get('/organisation-structures', function () {
            return view('guide.structures');
        });

        Route::get('/roles', function () {
            return view('guide.roles');
        });

        Route::get('/processes', function () {
            return view('guide.processes');
        });
    });

    Route::prefix('synthesis')->group(function () {

        Route::get('/', function () {
            return view('synthesis.info');
        });

        Route::get('/create-project', 'SynthesisController@index');
        Route::post('/create-project', 'SynthesisController@store')->name('project.store');

        Route::get('/process-of-project/{project}', 'SynthesisController@processOfProject')->name('combination.list');
        Route::get('/create-combination/{project}', 'SynthesisController@createCombination')->name('combination.create');
        Route::get('/calculate/{project}', 'SynthesisController@calculateCombination')->name('combination.calculate');
        Route::get('/get-all-sources', 'SynthesisController@getAllSources')->name('combination.get-all-sources');

        Route::post('/add-combination', 'SynthesisController@addCombination');

        Route::post('/get-process', 'SynthesisController@getProcess')->name('combination.get-process');
    });

});
