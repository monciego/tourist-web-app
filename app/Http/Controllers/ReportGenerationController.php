<?php

namespace App\Http\Controllers;

use App\Models\TourRegistration;
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

    public function arrivalPerYear() {
        $arrivals_per_year = DB::table('tour_registrations')->select(
            DB::raw("DATE_FORMAT(tour_date, '%Y') as year"),
            DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
            DB::raw( 'SUM(number_of_children) as total_number_of_children'),
            DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
            DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
        )
        ->where('status', 'already_left')
        ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%Y')"))
        ->get();
        return view('superadmin.report-generation.reports.arrival-per-year.show', compact('arrivals_per_year'));
    }

    public function allTouristArrival() {
        $adults = TourRegistration::where('status', 'already_left')->pluck('number_of_adults')->toArray();
        $children = TourRegistration::where('status', 'already_left')->pluck('number_of_children')->toArray();
        $infants = TourRegistration::where('status', 'already_left')->pluck('number_of_infants')->toArray();
        $foreigners = TourRegistration::where('status', 'already_left')->pluck('number_of_foreigner')->toArray();
        $total_of_adults = array_sum($adults);
        $total_of_children = array_sum($children);
        $total_of_infants = array_sum($infants);
        $total_of_foreigner = array_sum($foreigners);
        $totalTourists =  $total_of_adults + $total_of_children + $total_of_infants + $total_of_foreigner;
        return view('superadmin.report-generation.reports.all-tourist-arrival.show', compact('totalTourists'));
    }

    public function nightTouristArrival() {
        $adults_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_adults')->toArray();
        $children_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_children')->toArray();
        $infants_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_infants')->toArray();
        $foreigners_night_tourist = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->pluck('number_of_foreigner')->toArray();
        $total_of_adults_night_tour = array_sum($adults_night_tourist);
        $total_of_children_night_tour = array_sum($children_night_tourist);
        $total_of_infants_night_tour = array_sum($infants_night_tourist);
        $total_of_foreigner_night_tour = array_sum($foreigners_night_tourist);
        $night_tourists = $total_of_adults_night_tour + $total_of_children_night_tour + $total_of_infants_night_tour + $total_of_foreigner_night_tour;
        return view('superadmin.report-generation.reports.arrival-night-tourist.show', compact('night_tourists'));
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
