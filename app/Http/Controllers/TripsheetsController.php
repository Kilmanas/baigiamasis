<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretripsheetsRequest;
use App\Http\Requests\UpdatetripsheetsRequest;
use App\Models\CarMake;
use App\Models\CarModel;
use App\Models\FuelOptions;
use App\Models\FuelType;
use App\Models\Tripsheet;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class TripsheetsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data['tripsheets'] = Tripsheet::where('user_id', Auth::id())->with(['user'])->sortable()->paginate(30);
        $data['fuel_types'] = FuelType::all();
        $data['fuel_options'] = FuelOptions::all();
        $data['car_makes'] = CarMake::all();
        $data['car_models'] = CarModel::all();
        return view('tripsheet.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $data['tripsheet'] = Tripsheet::where('user_id', Auth::id())->orderBy('period', 'DESC')->first();
        $data['fuels'] = FuelType::all();
        $data['fuel_options'] = FuelOptions::all();
        $data['car_makes'] = CarMake::all();
        return view('tripsheet.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoretripsheetsRequest $request
     * @return Response
     */
    public function store(StoretripsheetsRequest $request)
    {
        $distance = $request->post('odometer_in') - $request->post('odometer_out');
        $tripsheet = new Tripsheet();
        $tripsheet->user_id = Auth::id();
        $tripsheet->name = $request->post('name');
        $tripsheet->period = $request->post('period_from') . ' - ' . $request->post('period_to');
        $tripsheet->car_make_id = $request->post('car_make_id');
        $tripsheet->car_model_id = $request->post('car_model_id');
        $tripsheet->plate_no = $request->post('plate_no');
        $tripsheet->destination = $request->post('destination');
        $tripsheet->departure_time = $request->post('departure_time');
        $tripsheet->return_time = $request->post('return_time');
        $tripsheet->fuel_type_id = $request->post('fuel_type_id');
        $tripsheet->fuel_option_id = $request->post('fuel_option_id');
        $tripsheet->odometer_out = $request->post('odometer_out');
        $tripsheet->odometer_in = $request->post('odometer_in');
        $tripsheet->fuel_norm = $request->post('fuel_norm');
        $tripsheet->fuel_out = $request->post('fuel_out');
        $tripsheet->fuel_used = $distance * ($request->post('fuel_norm') / 100);
        $tripsheet->fuel_in = $request->post('fuel_out') - $tripsheet->fuel_used + $request->post('fuel_received');
        if ($request->post('fuel_received') !== null) {
            $tripsheet->fuel_received = $request->post('fuel_received');
        } else {
            $tripsheet->fuel_received = 0;
        }
        $tripsheet->distance = $distance;
        $tripsheet->company_id = Auth::user()->company_id;
        $tripsheet->save();
        return redirect()->route('tripsheet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Tripsheet $tripsheets
     * @return Response
     */
    public function show(Tripsheet $tripsheet)
    {
        $data['tripsheet'] = $tripsheet;
        return view('tripsheet.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tripsheet $tripsheets
     * @return Response
     */
    public function edit(Tripsheet $tripsheet)
    {
        $data['tripsheet'] = $tripsheet;
        $data['fuels'] = FuelType::all();
        $data['fuel_options'] = FuelOptions::all();
        $data['car_makes'] = CarMake::all();
        $data['car_models'] = CarModel::all();
        $data['period_from'] = substr($tripsheet->period, 0, 10);
        $data['period_to'] = substr($tripsheet->period, -10);
        return view('tripsheet.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatetripsheetsRequest $request
     * @param Tripsheet $tripsheets
     * @return Response
     */
    public function update(UpdatetripsheetsRequest $request, Tripsheet $tripsheet)
    {
        $distance = $request->post('odometer_in') - $request->post('odometer_out');
        $tripsheet->user_id = Auth::id();
        $tripsheet->name = $request->post('name');
        $tripsheet->period = $request->post('period_from') . ' - ' . $request->post('period_to');
        $tripsheet->car_make_id = $request->post('car_make_id');
        $tripsheet->car_model_id = $request->post('car_model_id');
        $tripsheet->plate_no = $request->post('plate_no');
        $tripsheet->destination = $request->post('destination');
        $tripsheet->departure_time = $request->post('departure_time');
        $tripsheet->return_time = $request->post('return_time');
        $tripsheet->fuel_type_id = $request->post('fuel_type_id');
        $tripsheet->fuel_option_id = $request->post('fuel_option_id');
        $tripsheet->odometer_out = $request->post('odometer_out');
        $tripsheet->odometer_in = $request->post('odometer_in');
        $tripsheet->fuel_norm = $request->post('fuel_norm');
        $tripsheet->fuel_out = $request->post('fuel_out');
        $tripsheet->fuel_used = $distance * ($request->post('fuel_norm') / 100);
        $tripsheet->fuel_in = $request->post('fuel_out') - $tripsheet->fuel_used + $request->post('fuel_received');
        if ($request->post('fuel_received') !== 0) {
            $tripsheet->fuel_received = $request->post('fuel_received');
        } else {
            $tripsheet->fuel_received = 0;
        }
        $tripsheet->distance = $distance;
        $tripsheet->company_id = Auth::user()->company->id;
        $tripsheet->save();

        return redirect()->route('tripsheet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tripsheet $tripsheets
     * @return Response
     */
    public function destroy(Tripsheet $tripsheet)
    {
        $tripsheet->delete();
        return redirect()->route('tripsheet.index');
    }
}
