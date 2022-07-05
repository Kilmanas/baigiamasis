<?php

namespace App\Http\Controllers;


class RoleController extends Controller
{
    public function setCompanyAdmin($user)
    {
        $user->assignRole('company-admin');
    }

    public function setUser($user)
    {
        $user->assignRole('user');
    }

}
