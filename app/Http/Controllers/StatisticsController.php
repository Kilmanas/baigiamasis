<?php

namespace App\Http\Controllers;

use App\Models\Tripsheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatisticsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:manage company']);
    }
    public function index()
    {
        $data['periods'] = Tripsheet::select('period')->where('company_id', Auth::user()->company->id)
            ->get()->sortBy('period');

        return view('stats.index', $data);
    }

    public function monthStats(Request $request)
    {
        $period = $request->post('period');
        $fuel_used = Tripsheet::where('company_id', Auth::user()->company->id)
            ->where('period', "LIKE", '%' . $period . '%')->sum('fuel_used');
        $fuel_received = Tripsheet::where('company_id', Auth::user()->company->id)
            ->where('period', "LIKE", '%' . $period . '%')->sum('fuel_received');
        $distance = Tripsheet::where('company_id', Auth::user()->company->id)
            ->where('period', "LIKE", '%' . $period . '%')->sum('distance');
        $petrol = Tripsheet::where('company_id', Auth::user()->company->id)
            ->where('period', "LIKE", '%' . $period . '%')
            ->whereIn('fuel_type_id', [6, 7, 8])
            ->sum('fuel_used');
        $diesel = Tripsheet::where('company_id', Auth::user()->company->id)
            ->where('period', "LIKE", '%' . $period . '%')
            ->whereIn('fuel_type_id', [9, 10])
            ->sum('fuel_used');
        return view('stats.month')
            ->with('fuel_used', $fuel_used)
            ->with('fuel_received', $fuel_received)
            ->with('distance', $distance)
            ->with('petrol', $petrol)
            ->with('period', $period)
            ->with('diesel', $diesel);
    }
}
