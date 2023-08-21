<?php

use App\Models\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoriePermission;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
//use Spatie\Permission\Models\Permission;
use App\Models\Permission;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users',UserController::class);
//Route::get('users/expor',[UserController::class,'exportUser']);
Route::get("holla",[UserController::class,'exportUsers']);
Route::apiResource('roles',RoleController::class);

Route::post("export_pdf",[UserController::class,'exportPdf']);


//previewPDF
Route::get("previewPdf",[UserController::class,'previewPdf']);
//previewBillPDF
Route::get("previewBillPdf",[UserController::class,'previewBillPdf']);
//working :  downloadPDF
Route::get("downloadPdfMi",[UserController::class,'getPostPdf']);
/*****************************************************/
Route::get("mikerinos",function(){
    //88-48-28
    /*****************************************************/
    DB::SELECT("DELETE FROM categorie_permissions");
    $categorie_permissions = [
        ['id'=>1,'categorie_permission_name'=>'utilisateurs'],  //1
        ['id'=>2,'categorie_permission_name'=>'roles'],         //2
        ['id'=>3,'categorie_permission_name'=>'staff'],         //3
        ['id'=>4,'categorie_permission_name'=>'type_de_staff'], //4
        ['id'=>5,'categorie_permission_name'=>'departements'],  //5
        ['id'=>6,'categorie_permission_name'=>'domaines'],      //6
        ['id'=>7,'categorie_permission_name'=>'serveurs'],      //7
        ['id'=>8,'categorie_permission_name'=>'outils'],        //8
        ['id'=>9,'categorie_permission_name'=>'typeOutils'],    //9
    ];
    foreach ($categorie_permissions as $p) {
        CategoriePermission::create($p);
    }
    /*****************************************************/
    /*****************************************************/
    Permission::create([
        'name'                      =>'Super Admin',
        'guard_name'                =>'web',
        'slug'                      =>'liste des amés',           
        'categorie_permission_id '  =>'1'
    ]);
});
