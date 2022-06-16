<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(Request $request)
    {
        $name = $request->post('company');
        $company = Company::firstOrCreate(
            ['name' => $name],
            ['address' => $request->post('address')],
            ['phone' => $request->post('phone')]
        );
    }
}
