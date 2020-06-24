<?php

use App\User;
use Illuminate\Support\Facades\Route;

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
    $user = factory('App\User')->create();

    $user->assignRole(1, 'admin');
    $user->givePermissionTo(1, 'list');
});

Route::get('roles/{tenant}', function ($tenant) {
    $users =  User::role('admin', request('tenant'))->get();
    $users = User::first()->hasAllRoles('admin', request('tenant'));

    dd($users);
});


Route::get('permissions/{tenant}', function ($tenant) {
    $users =  User::permission('update', request('tenant'))->get();
    $users = User::first()->hasAllDirectPermissions(request('tenant'), ['create', 'list']);

    dd($users);
});
