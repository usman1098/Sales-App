<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PermissionType;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function add_user()
    {

        $data['title'] = 'Users - Add';
        $data['meta_desc'] = 'Users Description';
        $data['keyword'] = '';
        return view('admin.pages.users.add')->with([
            'data' => $data
        ]);
    }

    // Users List

    public function user_list()
    {
        $data['title'] = 'Users - List';
        $data['meta_desc'] = 'Users Description';
        $data['keyword'] = '';
        return view('admin.pages.users.list')->with([
            'data' => $data
        ]);
    }

    // Users Edit

    public function edit_user($id)
    {
        $data['title'] = 'Users - Edit';
        $data['meta_desc'] = 'Users Description';
        $data['keyword'] = '';
        return view('admin.pages.users.edit')->with([
            'data' => $data,
            'id' => $id
        ]);
    }
    
    // Roles List

    public function all_roles()
    {
        $roles = array();
        $types = PermissionType::where('guard_name', 'superadmin')->select('id', 'name')->get();
        $permissions = Permission::where('guard_name', 'superadmin')->select('id', 'name', 'type')->get();
        
        foreach ($types as $type) {
            $cntr = 0;
            foreach ($permissions as $permi) {
                if($type->id == $permi->type) {
                    $roles[$type->name][$cntr]['name'] = $permi->name;
                    $roles[$type->name][$cntr]['id'] = $permi->id;
                    $cntr++;
                }
            }    
        }
        
        $rolesFromDB = Role::where('guard_name', 'superadmin')->get();
        
        $data['title'] = 'Admin - Roles';
        $data['meta_desc'] = 'Roles Description';
        $data['keyword'] = '';
        return view('admin.pages.roles.list')->with([
            'data' => $data,
            'roles' => $roles,
            'rolesFromDB' => $rolesFromDB
        ]);
    }
    public function add_admin_role(Request $request){

        $request->validate([
            "name" => "required|string",
            // "permissions" => "required|array",
            // 'permissions.*' => 'required|string'
        ]);
        // dd($request);
        $roles = Role::create(['name' => $request->name, 'guard_name' => 'superadmin']);
        if($roles) {
                

            $roles->givePermissionTo($request->permissions);
            return redirect()->route('admin.roles')->with('success', 'Role Created successfully.');
        }
        else
        {
            return redirect()->route('admin.roles')->with('error', 'Something Went Wrong.');
        }
    }
    public function update_admin_role(Request $request, $id){
        
        $request->validate([
            'name' => 'required|string|max:255',
            
        ]);
        $dataU = [
            'name' => $request->name
        ];
        
        $role = Role::where('id', $id)->update($dataU);
        if($role) {
            $getRole = Role::where('id', $id)->first();
            $getRole->syncPermissions([]);
            $getRole->givePermissionTo($request->permissions);
            return redirect()->route('admin.roles')->with('success', 'Role Updated successfully.');
        }
        else
        {
            return redirect()->route('admin.roles')->with('error', 'Something Went Wrong.');
        }
    }
    public function delete_admin_role($id) {
            
        $getRole = Role::where('id', $id)->first();
        if(empty($getRole)) { return redirect()->route('admin.roles')->with('error', 'Record Not Found');}

        $getRole->syncPermissions([]);
        $getRole->delete();
        if($getRole){
            return redirect()->route('admin.roles')->with('success', 'Role Deleted Successfully.');
        }
        else
        {
            return redirect()->route('admin.roles')->with('error', 'Something Went Wrong.');
        }
    }
}
