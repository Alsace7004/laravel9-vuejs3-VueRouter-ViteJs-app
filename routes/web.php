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

Route::get('/{all}', function () {
    return view('welcome');
})->where('all','.*'); 

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

        /*['name'=>'server-list',   'guard_name'=>'web','slug'=>'liste des serveurs'],
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
        ['name'=>'typeStaff-delete', 'guard_name'=>'web','slug'=>'suppretion de type staff'],*/
    ];
    //Permission::create(['name'=>'name','guard_name'=>'guard_name']);
    foreach ($datas as $data) {
        Permission::create($data);
    }
});

$permissions = [
    /******************for-web************************/
    //users
    ['name'=>'user-list',               'guard_name'=>'web','slug'=>'liste utilisateurs',           'categorie_permission_id '=>'1'],
    ['name'=>'user-create',             'guard_name'=>'web','slug'=>'creation utilisateurs',        'categorie_permission_id '=>'1'],
    ['name'=>'user-edit',               'guard_name'=>'web','slug'=>'edition utilisateurs',         'categorie_permission_id '=>'1'],
    ['name'=>'user-delete',             'guard_name'=>'web','slug'=>'suppretion utilisateurs',      'categorie_permission_id '=>'1'],
    //roles
    ['name'=>'role-list',               'guard_name'=>'web','slug'=>'liste de role',                'categorie_permission_id '=>'2'],
    ['name'=>'role-create',             'guard_name'=>'web','slug'=>'creation de role',             'categorie_permission_id '=>'2'],
    ['name'=>'role-view',               'guard_name'=>'web','slug'=>'voire role',                   'categorie_permission_id '=>'2'],
    ['name'=>'role-edit',               'guard_name'=>'web','slug'=>'edition de role',              'categorie_permission_id '=>'2'],
    ['name'=>'role-delete',             'guard_name'=>'web','slug'=>'suppretion de role',           'categorie_permission_id '=>'2'],
    //staff
    ['name'=>'staff-list',              'guard_name'=>'web','slug'=>'liste de staff',               'categorie_permission_id '=>'3'],
    ['name'=>'staff-create',            'guard_name'=>'web','slug'=>'creation de staff',            'categorie_permission_id '=>'3'],
    ['name'=>'staff-edit',              'guard_name'=>'web','slug'=>'edition de staff',             'categorie_permission_id '=>'3'],
    ['name'=>'staff-delete',            'guard_name'=>'web','slug'=>'suppretion de staff',          'categorie_permission_id '=>'3'],
    ['name'=>'staff-total-actif',       'guard_name'=>'web','slug'=>'nombre de staff actif',        'categorie_permission_id '=>'3'],
    //typeStaff
    ['name'=>'typeStaff-list',          'guard_name'=>'web','slug'=>'liste de type staff',          'categorie_permission_id '=>'4'],
    ['name'=>'typeStaff-create',        'guard_name'=>'web','slug'=>'creation de type staff',       'categorie_permission_id '=>'4'],
    ['name'=>'typeStaff-edit',          'guard_name'=>'web','slug'=>'edition de type staff',        'categorie_permission_id '=>'4'],
    ['name'=>'typeStaff-delete',        'guard_name'=>'web','slug'=>'suppretion de type staff',     'categorie_permission_id '=>'4'],
     //departements
    ['name'=>'departement-list',        'guard_name'=>'web','slug'=>'liste de departement',         'categorie_permission_id '=>'5'],
    ['name'=>'departement-create',      'guard_name'=>'web','slug'=>'creation de departement',      'categorie_permission_id '=>'5'],
    ['name'=>'departement-edit',        'guard_name'=>'web','slug'=>'edition de departement',       'categorie_permission_id '=>'5'],
    ['name'=>'departement-delete',      'guard_name'=>'web','slug'=>'suppretion de departement',    'categorie_permission_id '=>'5'],
    ['name'=>'departement-total-actif', 'guard_name'=>'web','slug'=>'nombre de departement actif',  'categorie_permission_id '=>'5'],
     //domaines
    ['name'=>'domaine-list',            'guard_name'=>'web','slug'=>'liste de domaine',             'categorie_permission_id '=>'6'],
    ['name'=>'domaine-create',          'guard_name'=>'web','slug'=>'creation de domaine',          'categorie_permission_id '=>'6'],
    ['name'=>'domaine-view',            'guard_name'=>'web','slug'=>'voir domaine',                 'categorie_permission_id '=>'6'],
    ['name'=>'domaine-edit',            'guard_name'=>'web','slug'=>'edition de domaine',           'categorie_permission_id '=>'6'],
    ['name'=>'domaine-delete',          'guard_name'=>'web','slug'=>'suppretion de domaine',        'categorie_permission_id '=>'6'],
    ['name'=>'domaine-total',           'guard_name'=>'web','slug'=>'nombre de domaine',            'categorie_permission_id '=>'6'],
    ['name'=>'domaine-expire',          'guard_name'=>'web','slug'=>'nombre domaine expire',        'categorie_permission_id '=>'6'],
    //servers
    ['name'=>'server-list',             'guard_name'=>'web','slug'=>'liste des serveurs',           'categorie_permission_id '=>'7'],
    ['name'=>'server-create',           'guard_name'=>'web','slug'=>'creation de serveur',          'categorie_permission_id '=>'7'],
    ['name'=>'server-view',             'guard_name'=>'web','slug'=>'voir serveur',                 'categorie_permission_id '=>'7'],
    ['name'=>'server-edit',             'guard_name'=>'web','slug'=>'edition de serveur',           'categorie_permission_id '=>'7'],
    ['name'=>'server-delete',           'guard_name'=>'web','slug'=>'suppretion de serveur',        'categorie_permission_id '=>'7'],
    ['name'=>'serveur-total',           'guard_name'=>'web','slug'=>'nombre de serveur',            'categorie_permission_id '=>'7'],
    ['name'=>'serveur-expire',          'guard_name'=>'web','slug'=>'nombre serveur expire',        'categorie_permission_id '=>'7'],
    //outils 16-03-2023
    ['name'=>'outil-list',              'guard_name'=>'web','slug'=>"liste des outils",             'categorie_permission_id '=>'8'],
    ['name'=>'outil-create',            'guard_name'=>'web','slug'=>"creation d'un outil",          'categorie_permission_id '=>'8'],
    ['name'=>'outil-view',              'guard_name'=>'web','slug'=>"voir outil",                   'categorie_permission_id '=>'8'],
    ['name'=>'outil-edit',              'guard_name'=>'web','slug'=>"edition d'un outil",           'categorie_permission_id '=>'8'],
    ['name'=>'outil-delete',            'guard_name'=>'web','slug'=>"suppretion d'un outil",        'categorie_permission_id '=>'8'],
    //typeOutils 16-03-2023
    ['name'=>'typeOutil-list',          'guard_name'=>'web','slug'=>"liste des type d'outils",      'categorie_permission_id '=>'9'],
    ['name'=>'typeOutil-create',        'guard_name'=>'web','slug'=>"creation de type d'outils",    'categorie_permission_id '=>'9'],
    ['name'=>'typeOutil-edit',          'guard_name'=>'web','slug'=>"edition du type d'outil",      'categorie_permission_id '=>'9'],
    ['name'=>'typeOutil-delete',        'guard_name'=>'web','slug'=>"suppretion du type d'outil",   'categorie_permission_id '=>'9'],
    
    /*************************************************for-staffs**************************************************************/
    //staff
    ['name'=>'staff-list',              'guard_name'=>'staffs','slug'=>'liste de staff',                'categorie_permission_id '=>'3'],
    ['name'=>'staff-create',            'guard_name'=>'staffs','slug'=>'creation de staff',             'categorie_permission_id '=>'3'],
    ['name'=>'staff-edit',              'guard_name'=>'staffs','slug'=>'edition de staff',              'categorie_permission_id '=>'3'],
    ['name'=>'staff-delete',            'guard_name'=>'staffs','slug'=>'suppretion de staff',           'categorie_permission_id '=>'3'],
    ['name'=>'staff-total-actif',       'guard_name'=>'staffs','slug'=>'nombre de staff actif',         'categorie_permission_id '=>'3'],
    //typeStaff
    ['name'=>'typeStaff-list',          'guard_name'=>'staffs','slug'=>'liste de type staff',           'categorie_permission_id '=>'4'],
    ['name'=>'typeStaff-create',        'guard_name'=>'staffs','slug'=>'creation de type staff',        'categorie_permission_id '=>'4'],
    ['name'=>'typeStaff-edit',          'guard_name'=>'staffs','slug'=>'edition de type staff',         'categorie_permission_id '=>'4'],
    ['name'=>'typeStaff-delete',        'guard_name'=>'staffs','slug'=>'suppretion de type staff',      'categorie_permission_id '=>'4'],
    //departements
    ['name'=>'departement-list',        'guard_name'=>'staffs','slug'=>'liste de departement',          'categorie_permission_id '=>'5'],
    ['name'=>'departement-create',      'guard_name'=>'staffs','slug'=>'creation de departement',       'categorie_permission_id '=>'5'],
    ['name'=>'departement-edit',        'guard_name'=>'staffs','slug'=>'edition de departement',        'categorie_permission_id '=>'5'],
    ['name'=>'departement-delete',      'guard_name'=>'staffs','slug'=>'suppretion de departement',     'categorie_permission_id '=>'5'],
    ['name'=>'departement-total-actif', 'guard_name'=>'staffs','slug'=>'nombre de departement actif',   'categorie_permission_id '=>'5'],
    //domaines
    ['name'=>'domaine-list',            'guard_name'=>'staffs','slug'=>'liste de domaine',              'categorie_permission_id '=>'6'],
    ['name'=>'domaine-create',          'guard_name'=>'staffs','slug'=>'creation de domaine',           'categorie_permission_id '=>'6'],
    ['name'=>'domaine-view',            'guard_name'=>'staffs','slug'=>'voir domaine',                  'categorie_permission_id '=>'6'],
    ['name'=>'domaine-edit',            'guard_name'=>'staffs','slug'=>'edition de domaine',            'categorie_permission_id '=>'6'],
    ['name'=>'domaine-delete',          'guard_name'=>'staffs','slug'=>'suppretion de domaine',         'categorie_permission_id '=>'6'],
    ['name'=>'domaine-total',           'guard_name'=>'staffs','slug'=>'nombre de domaine',             'categorie_permission_id '=>'6'],
    ['name'=>'domaine-expire',          'guard_name'=>'staffs','slug'=>'nombre domaine expire',         'categorie_permission_id '=>'6'],
    //servers
    ['name'=>'server-list',             'guard_name'=>'staffs','slug'=>'liste des serveurs',            'categorie_permission_id '=>'7'],
    ['name'=>'server-create',           'guard_name'=>'staffs','slug'=>'creation de serveur',           'categorie_permission_id '=>'7'],
    ['name'=>'server-view',             'guard_name'=>'staffs','slug'=>'voir serveur',                  'categorie_permission_id '=>'7'],
    ['name'=>'server-edit',             'guard_name'=>'staffs','slug'=>'edition de serveur',            'categorie_permission_id '=>'7'],
    ['name'=>'server-delete',           'guard_name'=>'staffs','slug'=>'suppretion de serveur',         'categorie_permission_id '=>'7'],
    ['name'=>'serveur-total',           'guard_name'=>'staffs','slug'=>'nombre de serveur',             'categorie_permission_id '=>'7'],
    ['name'=>'serveur-expire',          'guard_name'=>'staffs','slug'=>'nombre serveur expire',         'categorie_permission_id '=>'7'],
    //outils 16-03-2023
    ['name'=>'outil-list',              'guard_name'=>'staffs','slug'=>"liste des outils",              'categorie_permission_id '=>'8'],
    ['name'=>'outil-create',            'guard_name'=>'staffs','slug'=>"creation d'un outil",           'categorie_permission_id '=>'8'],
    ['name'=>'outil-view',              'guard_name'=>'staffs','slug'=>"voir outil",                    'categorie_permission_id '=>'8'],
    ['name'=>'outil-edit',              'guard_name'=>'staffs','slug'=>"edition d'un outil",            'categorie_permission_id '=>'8'],
    ['name'=>'outil-delete',            'guard_name'=>'staffs','slug'=>"suppretion d'un outil",         'categorie_permission_id '=>'8'],
    //typeOutils 16-03-2023
    ['name'=>'typeOutil-list',          'guard_name'=>'staffs','slug'=>"liste des type d'outils",       'categorie_permission_id '=>'9'],
    ['name'=>'typeOutil-create',        'guard_name'=>'staffs','slug'=>"creation de type d'outils",     'categorie_permission_id '=>'9'],
    ['name'=>'typeOutil-edit',          'guard_name'=>'staffs','slug'=>"edition du type d'outil",       'categorie_permission_id '=>'9'],
    ['name'=>'typeOutil-delete',        'guard_name'=>'staffs','slug'=>"suppretion du type d'outil",    'categorie_permission_id '=>'9'],
];
/*foreach ($permissions as $permission) {
    Permission::create($permission);
}*/
