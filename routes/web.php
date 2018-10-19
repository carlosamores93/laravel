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
    return view('admin.index');
});


Route::prefix('admin')->group(function () {


	// Ruta para los usuarios, creamos todo el grupo de rutas (apiResource)
	Route::apiResource('users', 'UsersController');
	// php artisan route:list
	/*
		+--------+-----------+--------------------+---------------+----------------------------------------------+--------------+
		| Domain | Method    | URI                | Name          | Action                                       | Middleware   |
		+--------+-----------+--------------------+---------------+----------------------------------------------+--------------+
		|        | GET|HEAD  | /                  |               | Closure                                      | web          |
		|        | GET|HEAD  | admin/users        | users.index   | App\Http\Controllers\UsersController@index   | web          |
		|        | POST      | admin/users        | users.store   | App\Http\Controllers\UsersController@store   | web          |
		|        | GET|HEAD  | admin/users/{user} | users.show    | App\Http\Controllers\UsersController@show    | web          |
		|        | PUT|PATCH | admin/users/{user} | users.update  | App\Http\Controllers\UsersController@update  | web          |
		|        | DELETE    | admin/users/{user} | users.destroy | App\Http\Controllers\UsersController@destroy | web          |
		|        | GET|HEAD  | api/user           |               | Closure                                      | api,auth:api |
		+--------+-----------+--------------------+---------------+----------------------------------------------+--------------+
	*/



});

