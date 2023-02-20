<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $length = $request->input('length');
        $searchValue = $request->input('search');
        $roles = Role::query()->select('id','name','created_at')->orderBy('id','desc');
        if($searchValue){
            $roles->where(function($query) use ($searchValue){
                $query->where('name','like','%'.$searchValue.'%');
            });
        }
        return response()->json([
            'status'=>true,
            'roles'=>$roles->paginate($length)
        ]);
    }

    public function store(Request $request)
    {
        //
        $data = $request->only(['name','permission','guard_name']);
        $validator = Validator::make($data,[
            'name'          =>'required|string|unique:roles,name|min:2|max:20',
            'guard_name'=>'required|string',
            'permission'    => 'required',
        ],[
            'name.required' =>'Veuillez remplir ce champ',
            'name.unique'   =>'Cette valeur existe déjà',
            'name.min'      =>'Trop court',
            'name.max'      =>'Trop long',
            'permission.required'=>'Veuillez choisir une permission',
        ]);
        if($validator->fails()){
            return response()->json(['status'=>false,'errors'=>$validator->errors()],422);
        }
        $role = Role::create([
            'name'      =>$data['name'],
            'guard_name'=>$data['guard_name'],
        ]);
        if($role->syncPermissions($request->get('permission'))){
            return ['status'=>true];
        }
        return ['status'=>false];
    }   

    public function show(Role $role)
    {
        //
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
        ->where("role_has_permissions.role_id",$role->id)
        ->get();
        return response()->json([
            'role'=>$role,
            'rolePermissions'=>$rolePermissions
        ]);
    }
    public function showRole(Role $role)
    {
        //
        $rolePermissions  = DB::SELECT("SELECT
            role_has_permissions.permission_id
            FROM role_has_permissions,roles,permissions    
            WHERE roles.id = role_has_permissions.role_id 
            AND permissions.id = role_has_permissions.permission_id
            AND role_has_permissions.role_id =('.$role->id.')");
        return response()->json([
            'role'=>$role,
            'rolePermissions'=>$rolePermissions
        ]);
    }
    public function update(Request $request, Role $role)
    {
        //
        $data = $request->role;
        $tab = $request->role2; //les permissions

        $a=array();
        foreach ($tab as $key => $value) { 
            if ($value == true) array_push($a,$key);
        } 

        $validator = Validator::make($data,[
            'name'          =>'required|string|min:2|max:20',
            'guard_name'=>'required|string',
        ],[
            'name.required' =>'Veuillez remplir ce champ',
            'name.unique'   =>'Cette valeur existe déjà',
            'name.min'      =>'Trop court',
            'name.max'      =>'Trop long',
        ]);
        if($validator->fails()){
            return response()->json(['status'=>false,'errors'=>$validator->errors()],422);
        }
        /* $role->name = $request->input('name');
        $role->guard_name = $request->input('guard_name'); */
        $role->name = $request->role['name'];
        $role->guard_name = $request->role['guard_name'];

        if($role->save()){
            //$role->syncPermissions($request->input('permission'));
            $role->syncPermissions($a);
            return ["status"=>true];
        }
        return ["status"=>false];
    }

    public function destroy(Role $role)
    {
        //
        if($role->delete()){
            return ['status'=>true,];
        }
        return ['status'=>false];
    }
}
