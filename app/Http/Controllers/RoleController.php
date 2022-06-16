<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function create()
    {
        $role = Role::create(['name' => 'User']);
    }

    public function assign()
    {
        $user = Auth::user();
        $user->assignRole('company-admin');
    }

    public function permissionToRole()
    {
        $user = Auth::user();
        $user->givePermissionTo('manage company');
    }
}
