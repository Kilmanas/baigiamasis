<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function create(Request $request)
    {
        Role::create(['name' => "$request->name"]);
    }

    public function setCompanyAdmin($user)
    {
        $user->assignRole('company-admin');
    }

    public function setUser($user)
    {
        $user->assignRole('user');
    }

}
