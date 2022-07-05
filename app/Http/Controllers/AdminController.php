<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:admin']);
    }

    public function users()
    {
        $data['users'] = User::sortable()->paginate(30);
        return view('admin.users', $data);
    }

    public function userEdit($id)
    {
        $data['user'] = User::find($id);
        return view('admin.user_edit', $data);
    }

    public function userUpdate(Request $request)
    {
        $id = $request->post('user_id');
        $user = User::find($id);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $company = Company::firstOrCreate(
            ['name' => $request->post('company')],
            ['phone' => $request->post('company_phone'), 'address' => $request->post('company_address')],
        );
        $company->save();
        $user->company_id = $company->id;
        $user->save();
        return redirect()->route('admin.users');
    }

    public function deactivate($id)
    {
        $user = User::find($id);
        $user->active = 0;
        $user->save();
        return redirect()->route('admin.users');
    }
    public function activate($id)
    {
        $user = User::find($id);
        $user->active = 1;
        $user->save();
        return redirect()->route('admin.users');
    }
}
