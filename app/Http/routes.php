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
//use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'hello!';
});

Route::get('hello/world', function () {
    return 'hello! world';
});

Route::get('hello/world/{name}', function ($name) {
	//$response = new Response('Hello World '.$name, 200);
	//$response->header('Content-Type', 'text/plain');
    //return $response;
	return response('Hello world'.$name, 200)->header('Content-Type', 'text/plain');
});

Route::get('hello/json', function () {
	$data = ['name' => 'Iron Man', 'gender' => 'man'];

	//$response = new Response('Hello World '.$name, 200);
	//$response->header('Content-Type', 'text/plain');
    //return $response;
	return response()->json($data);
});


Route::get('task/view', function () {
	$task = ['name' => 'yong', 'doing' => 'test'];
	$datetimeValue = '2019-02-27';
	return view('task.view')->with('task', $task)
							->with('datetimeValue', $datetimeValue);
});

Route::get('task/list', function () {
	$tasks =
	[
		['name' => 'yong', 'doing' => 'test'],
		['name' => 'ggg', 'doing' => 'ssss'],
	];

	return view('task.list')->with('tasks', $tasks);

});

Route::get('task/test4', function () {
	return view('task.test4');
});

Route::get('task/list3', 'Task@list3');
Route::get('task/getuserlist/{searchType?}/{searchText?}', 'Task@getUserList');
Route::get('task/getuserlist', 'Task@getUserList');
Route::get('task/param/{id?}/{arg?}', 'Task@param');

Route::get('admin', 'Admin\AdminMain@main');
/*
Route::get('admin', function () {
	return view('admin.main');
});
*/

//Route::post('task.add', ['as' => 'task.add', 'uses' => 'TaskController@add']);

Route::controller('impl', 'Implicit');

Route::resource('orders', 'OrerController');

Route::get('orm/datalist', 'OrmController@dataList');


Route::get('orm/test', 'OrmController@test');

Route::get('member/getuserlist/{searchType?}/{searchText?}', 'member@getUserList');
//Route::get('member/getuserlist', 'member@getUserList');
