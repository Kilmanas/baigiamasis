<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\Tripsheet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CompanyAdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:manage company']);
    }

    public function index()
    {
        return view('company-admin.index');
    }

    public function createUser()
    {
        return view('company-admin-panel.create_user');
    }

    public function storeUser(StoreUserRequest $request)
    {
        if ($request->post('password') === $request->post('repeat-password'))
            $id = Auth::id();
        $user = new User();
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Hash::make($request->post('password'));
        $user->company_id = User::find($id)->company_id;
        $user->active = 1;
        $user->save();
        $user->assignRole('user');
        $user->givePermissionTo('user');
        return redirect()->route('user.list');
    }

    public function showUsers()
    {
        $company_id = Auth::user()->company->id;
        $data['users'] = User::where('company_id', $company_id)->where('active', 1)->get();
        return view('company-admin-panel.user_list', $data);
    }

    public function userEdit($id)
    {
        $data['user'] = User::find($id);
        return view('user.edit', $data);
    }

    public function userUpdate(Request $request)
    {
        $id = $request->post('user_id');
        $user = User::find($id);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->save();
        return redirect()->route('user.list');
    }

    public function deactivate($id)
    {
        $user = User::find($id);
        $user->active = 0;
        $user->save();
        return redirect()->route('user.list');
    }

    public function companyTripsheets()
    {
        $data['tripsheets'] = Tripsheet::where('company_id', Auth::user()->company_id)->sortable()->paginate(30);
        return view('company-admin-panel.tripsheets_list', $data);
    }
}
