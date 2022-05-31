<?php

namespace App\Http\Controllers;

use App\Models\tripsheets;
use App\Http\Requests\StoretripsheetsRequest;
use App\Http\Requests\UpdatetripsheetsRequest;

class TripsheetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretripsheetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretripsheetsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tripsheets  $tripsheets
     * @return \Illuminate\Http\Response
     */
    public function show(tripsheets $tripsheets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tripsheets  $tripsheets
     * @return \Illuminate\Http\Response
     */
    public function edit(tripsheets $tripsheets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetripsheetsRequest  $request
     * @param  \App\Models\tripsheets  $tripsheets
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetripsheetsRequest $request, tripsheets $tripsheets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tripsheets  $tripsheets
     * @return \Illuminate\Http\Response
     */
    public function destroy(tripsheets $tripsheets)
    {
        //
    }
}
