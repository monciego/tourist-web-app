<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportGenerationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin.report-generation.index');
    }

    public function arrivalPerDay() {
        $arrivals_per_day = DB::table('tour_registrations')->select(
        DB::raw("DATE_FORMAT(tour_date, '%M %d %Y') as day"),
        DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
        DB::raw( 'SUM(number_of_children) as total_number_of_children'),
        DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
        DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
        )
        ->where('status', 'already_left')
        ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%M %d %Y')"))
        ->get();
        return view('superadmin.report-generation.reports.arrival-per-day.show', compact('arrivals_per_day'));
    }

    public function arrivalPerMonth() {
        $arrivals_per_month = DB::table('tour_registrations')->select(
            DB::raw("DATE_FORMAT(tour_date, '%M %Y') as month"),
            DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
            DB::raw( 'SUM(number_of_children) as total_number_of_children'),
            DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
            DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
        )
        ->where('status', 'already_left')
        ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%M %Y')"))
        ->get();
        return view('superadmin.report-generation.reports.arrival-per-month.show', compact('arrivals_per_month'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
