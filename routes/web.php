<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\tb_suratmasuk;
use Spatie\Permission\Models\tb_suratkeluar;
use Spatie\Permission\Models\tb_disposisi;
use Spatie\Permission\Models\Beranda;

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

//Route::get('/admin','AdminController@login');
// Route::match(['get','post'],'/admin','AdminController@login');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/tambahsm', 'SuratmasukController@create')->name('tambahsm');

Route::get('/tambahsk', 'SuratkeluarController@create')->name('tambahsm');

// Route::get('/', 'BerandaController@index')->name('home');
// Route::get('/', 'SuratkeluarController@index')->name('home');

// Route::get('/', 'DisposisiController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('disposisi', 'DisposisiController');
// Route::resource('posts', 'PostController');

Route::resource('suratmasuk', 'SuratmasukController');

Route::resource('suratkeluar', 'SuratkeluarController');

// Route::resource('agenda', 'AgendaController');

//Route::resource('beranda', 'BerandaController');

// Route::resource('disposisi', 'DisposisiController');

//email admin@admin.com password admin123
//email admin@bps.go.id password admin123
// Route::get('/create_role_permission', function(){
// 	$role = Role::create(['name' => 'Administer']);
// 	$permission = Permission::create(['name' => 'Administer roles & permissions']);
// 	auth()->user()->assignRole('Administer');
// 	auth()->user()->givePermissionTo('Administer roles & permissions');
// });




//Route::get('/home', 'HomeController@index')->name('home');
