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
	$baba = DB::table("task")->get();
    return view('welcome',compact("baba"));
});

Route::get('about', function () {
    return view('about');
});

Route::get("/tasks",function(){
	$tasks = DB::table("task")->latest()->get();
	return view("tasks.index",compact("tasks"));
});


Route::get('/tasks/{task}', function ($id) {
	$task = DB::table("task")->find($id);
    return view('tasks.show',compact("task"));
});