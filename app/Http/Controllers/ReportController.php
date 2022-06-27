<?php

namespace App\Http\Controllers;

use App\Models\Tripsheet;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function select()
    {
        $data['periods'] = Tripsheet::select('period')->where('user_id', Auth::id())->get();
        return view('report.select', $data);
    }
}
