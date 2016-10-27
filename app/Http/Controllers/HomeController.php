<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Role;
use App\Permission;
use Auth;
class HomeController extends Controller
{
    public function index(){
    	return User::get();
    }

    public function attachUserRole($userId, $role){
    	$user = User::find($userId);
    	$roleId = Role::where('name', $role)->first();
    	$user->roles()->attach($roleId);
    	return $user; 
    }

    public function getUserRole($userId){
    	return User::find($userId)->roles;
    }

    /**
     *  add permissions to a role
     */
    public function attachPermission(Request $request){
    	$parameters = $request->only('permission', 'role');

    	$permissionParam = $parameters['permission'];
    	$roleParam = $parameters['role'];

    	$role = Role::where('name', $roleParam)->first();
    	$permission = Permission::where('name', $permissionParam)->first();

    	$role->attachPermission($permission);

    	// return $role->permissions;
    	return $this->response->created();
    }

    /**
     * return all permissions related to a role
     */
    public function getPermissions($roleParam){
    	$role = Role::where('name', $roleParam)->first();
    	return $this->response->array($role->perms);
    	// return $role->perms;
    }


}
