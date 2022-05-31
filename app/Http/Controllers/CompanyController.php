<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(Request $request)
    {
        $company = new company();
        $company->name = $request->post('company');
        $company->address = $request->post('address');
        $company->phone = $request->post('phone');
        $company->save();
    }
}
