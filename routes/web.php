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

Route::resource('cpi', 'CpiController');
Route::resource('run', 'RunController');
Route::resource('phase_well', 'Phase_wellController');
Route::resource('tool_size', 'Tool_sizeController');
Route::resource('well', 'WellController');
Route::resource('rig', 'RigController');
Route::resource('customer', 'CustomerController');
Route::resource('phase_fr4oo', 'Phase_fr400Controller');
Route::resource('subphase_fr4oo', 'Subphase_fr400Controller');
Route::resource('statu', 'StatuController');
Route::resource('action_plan', 'Action_planController');