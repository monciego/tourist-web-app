<?php

namespace App\Http\Controllers;

use App\Models\TourRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DataTouristController extends Controller
{
    public function numberOfTourists() {
        $date = date('Y-m-d H:i:s');
        $today = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F j, Y');
        $as_of_now = date('Y-m-d');
        $numberOfTourists = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->get();
        return view('superadmin.dashboard.as-of-now.number-of-tourists', compact('today', 'numberOfTourists'));
    }

    public function numberOfDayTourists() {
        $date = date('Y-m-d H:i:s');
        $today = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F j, Y');
        $as_of_now = date('Y-m-d');
        $numberOfDayTourists = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'day_tour')->get();

        return view('superadmin.dashboard.as-of-now.number-of-day-tourists', compact('today', 'numberOfDayTourists'));
    }

    public function numberOfNightTourists() {
        $date = date('Y-m-d H:i:s');
        $today = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F j, Y');
        $as_of_now = date('Y-m-d');
        $numberOfNightTourists = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'overnight')->get();

        return view('superadmin.dashboard.as-of-now.number-of-night-tourists', compact('today', 'numberOfNightTourists'));
    }
}
