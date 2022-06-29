<?php

namespace App\Services;

use App\Models\Tripsheet;
use Carbon\Carbon;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\DateTime;

class Report
{
    public function boot(Router $router)
    {
        $router->bind('period', function ($period) {
            $this->parameters($period);
        });
    }

    public function parameters($period)
    {
        $now = new DateTime();
        $periodArr = [];
        $nameArr = [];
        $odometerOutArr = [];
        $odometerInArr = [];
        $distanceArr = [];
        $fuelReceivedArr = [];
        $fuelUsedArr = [];
        $fuelInArr = [];
        $tripsheets = Tripsheet::where('user_id', Auth::id())->where('period', "LIKE", '%' . $period . '%')->get();
        $first = reset($tripsheets);
        foreach ($tripsheets as $tripsheet) {
            if ($tripsheet === reset($first)) {
                $startFuel = $tripsheet->fuel_out;
            }
            array_push($periodArr, str_replace('-', '.', substr($tripsheet->period, 0, 10)) . '-' .
                substr($tripsheet->period, -2));
            array_push($nameArr, $tripsheet->name);
            array_push($odometerOutArr, $tripsheet->odometer_out);
            array_push($odometerInArr, $tripsheet->odometer_in);
            array_push($distanceArr, $tripsheet->distance);
            array_push($fuelReceivedArr, $tripsheet->fuel_received);
            array_push($fuelUsedArr, $tripsheet->fuel_used);
            array_push($fuelInArr, $tripsheet->fuel_in);
        }
        $date = substr($tripsheet->period, 0, 10);
        Carbon::setLocale('lt');
        $month = Carbon::createFromFormat('Y-m-d', $date)->translatedFormat('F');
        $params = [
            '{year}' => substr($tripsheet->period, 0, 4),
            '{month}' => $month,
            '{company_name}' => Auth::user()->company->name,
            '{address}' => Auth::user()->company->address,
            '{telephone}' => Auth::user()->company->phone,
            '{car_make}' => $tripsheet->carMake->name,
            '{car_model}' => $tripsheet->carModel->name,
            '{plate_no}' => $tripsheet->plate_no,
            '{user}' => $tripsheet->user->name,
            '{fuel_norm}' => $tripsheet->fuel_norm,
            '{fuel_type}' => $tripsheet->fuelType->name,
            '{start_fuel}' => $startFuel,
            '[period]' => $periodArr,
            '[name]' => $nameArr,
            '[odometer_out]' => $odometerOutArr,
            '[odometer_in]' => $odometerInArr,
            '[distance]' => $distanceArr,
            '[fuel_received]' => $fuelReceivedArr,
            '[fuel_used]' => $fuelUsedArr,
            '[fuel_in]' => $fuelInArr,
            '{date}' => $now->format(('Y-m-d')),
            '{total_distance}' => array_sum($distanceArr),
            '{total_fuel_received}' => array_sum($fuelReceivedArr),
            '{total_fuel_used}' => array_sum($fuelUsedArr)
        ];
        return $params;
    }
}
