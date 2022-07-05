<?php

namespace App\Http\Controllers;

use alhimik1986\PhpExcelTemplator\PhpExcelTemplator;
use App\Models\Tripsheet;
use App\Services\Report;
use App\Services\TripsheetParams as TripsheetService;
use Illuminate\Http\Request;


class ExportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tripsheetExport(TripsheetService $tripsheet, $id)
    {
        $template = base_path('storage/files/tripsheet_template.xlsx');
        $name = Tripsheet::find($id);
        $params = $tripsheet->parameters($id);
        PhpExcelTemplator::outputToFile($template, "{$name->name}.xlsx", $params);
    }

    public function reportExport(Request $request, Report $report)
    {
        $period = $request->post('period');
        $template = base_path('storage/files/report_template.xlsx');
        $params = $report->parameters($period);

        PhpExcelTemplator::outputToFile($template, "{$period}.xlsx", $params);
    }
}
