<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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

/* Route::get('/{all}', function () {
    return view('welcome');
})->where('all','.*'); */

Route::get('/permi',function(){
    DB::SELECT("DELETE FROM permissions");
    //return 'je vous salut marie pleine de grace';
    $datas = [
        ['name'=>'user-list',   'guard_name'=>'web','slug'=>'liste utilisateurs'],
        ['name'=>'user-create', 'guard_name'=>'web','slug'=>'creation utilisateurs'],
        ['name'=>'user-edit',   'guard_name'=>'web','slug'=>'edition utilisateurs'],
        ['name'=>'user-delete', 'guard_name'=>'web','slug'=>'suppretion utilisateurs'],

        ['name'=>'role-list',   'guard_name'=>'web','slug'=>'liste de role'],
        ['name'=>'role-create', 'guard_name'=>'web','slug'=>'creation de role'],
        ['name'=>'role-view', '  guard_name'=>'web','slug'=>'voir role'],
        ['name'=>'role-edit',   'guard_name'=>'web','slug'=>'edition de role'],
        ['name'=>'role-delete', 'guard_name'=>'web','slug'=>'suppretion de role'],

        ['name'=>'server-list',   'guard_name'=>'web','slug'=>'liste des serveurs'],
        ['name'=>'server-create', 'guard_name'=>'web','slug'=>'creation de serveur'],
        ['name'=>'server-view',   'guard_name'=>'web','slug'=>'voir serveur'],
        ['name'=>'server-edit',   'guard_name'=>'web','slug'=>'edition de serveur'],
        ['name'=>'server-delete', 'guard_name'=>'web','slug'=>'suppretion de serveur'],

        ['name'=>'domaine-list',   'guard_name'=>'web','slug'=>'liste de domaine'],
        ['name'=>'domaine-create', 'guard_name'=>'web','slug'=>'creation de domaine'],
        ['name'=>'domaine-view',   'guard_name'=>'web','slug'=>'voir domaine'],
        ['name'=>'domaine-edit',   'guard_name'=>'web','slug'=>'edition de domaine'],
        ['name'=>'domaine-delete', 'guard_name'=>'web','slug'=>'suppretion de domaine'],

        ['name'=>'departement-list',   'guard_name'=>'web','slug'=>'liste de departement'],
        ['name'=>'departement-create', 'guard_name'=>'web','slug'=>'creation de departement'],
        ['name'=>'departement-edit',   'guard_name'=>'web','slug'=>'edition de departement'],
        ['name'=>'departement-delete', 'guard_name'=>'web','slug'=>'suppretion de departement'],

        ['name'=>'staff-list',   'guard_name'=>'web','slug'=>'liste de staff'],
        ['name'=>'staff-create', 'guard_name'=>'web','slug'=>'creation de staff'],
        ['name'=>'staff-edit',   'guard_name'=>'web','slug'=>'edition de staff'],
        ['name'=>'staff-delete', 'guard_name'=>'web','slug'=>'suppretion de staff'],

        ['name'=>'typeStaff-list',   'guard_name'=>'web','slug'=>'liste de type staff'],
        ['name'=>'typeStaff-create', 'guard_name'=>'web','slug'=>'creation de type staff'],
        ['name'=>'typeStaff-edit',   'guard_name'=>'web','slug'=>'edition de type staff'],
        ['name'=>'typeStaff-delete', 'guard_name'=>'web','slug'=>'suppretion de type staff'],
    ];
    //Permission::create(['name'=>'name','guard_name'=>'guard_name']);
    foreach ($datas as $data) {
        Permission::create($data);
    }
});
