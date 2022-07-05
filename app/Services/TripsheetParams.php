<?php

namespace App\Services;

use App\Models\Tripsheet;
use Carbon\Carbon;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;

class TripsheetParams
{
    public function boot(Router $router)
    {
        $router->bind('id', function ($id) {
            $this->parameters($id);
        });
    }

    public function parameters($id): array
    {
        $tripsheet = Tripsheet::find($id);
        $date = substr($tripsheet->period, 0, 10);
        Carbon::setLocale('lt');
        $month = Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('F');
        $start_day = substr($tripsheet->period, 8, 2);
        $end_day = substr($tripsheet->period, -2);
        if ($end_day !== $start_day) {
            $day = $start_day . ' - ' . $end_day;
        } else {
            $day = $start_day;
        }
        if ($tripsheet->departure_time == null) {
            $departure_time = $tripsheet->departure_time;
        } else {
            $departure_time = '';
        }
        if ($tripsheet->return_time == null) {
            $return_time = $tripsheet->departure_time;
        } else {
            $return_time = '';
        }
        $params = [
            '{company}' => Auth::user()->company->name,
            '{company_info}' => Auth::user()->company->address . ' ' . Auth::user()->company->phone,
            '{year}' => substr($tripsheet->period, 0, 4),
            '{month}' => $month,
            '{day}' => $day,
            '{car_make}' => $tripsheet->carMake->name,
            '{car_model}' => $tripsheet->carModel->name,
            '{plate_no}' => $tripsheet->plate_no,
            '{user}' => $tripsheet->user->name,
            '{destination}' => $tripsheet->destination,
            '{departure_time}' => $departure_time,
            '{return_time}' => $return_time,
            '{odometer_out}' => $tripsheet->odometer_out,
            '{odometer_in}' => $tripsheet->odometer_in,
            '{fuel_option}' => $tripsheet->fuelOption->name,
            '{fuel_received}' => $tripsheet->fuel_received,
            '{fuel_out}' => $tripsheet->fuel_out,
            '{fuel_in}' => $tripsheet->fuel_in,
            '{fuel_used}' => $tripsheet->fuel_used,
        ];
        return $params;
    }
}
