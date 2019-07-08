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
Route::get('/', 'ProjectsController@index');

// PROJECT ROUTES

Route::resource('projects', 'ProjectsController');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');
// // return all projects
// Route::get('/projects', 'ProjectsController@index');

// // return form to create project
// Route::get('/projects/create', 'ProjectsController@create');

// // return specific project
// Route::get('/projects/{project}', 'ProjectsController@show');

// // store new project
// Route::post('/projects', 'ProjectsController@store');

// // get project to edit
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');

// // update project
// Route::patch('/projects/{project}', 'ProjectsController@edit');

// // delete project
// Route::delete('/project/{project}', 'ProjectsController@destroy');