<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\RegisterUnclassifiedTourist;
use App\Models\TourRegistration;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class RedirectLoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (Auth::user()->hasRole('superadministrator')) {
        $date = date('Y-m-d H:i:s');
        $today = Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('F j, Y');

        // total of tourist as of this day
        $as_of_now = date('Y-m-d');
        $adults_as_of_today = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->pluck('number_of_adults')->toArray();
        $children_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->pluck('number_of_children')->toArray();
        $infants_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->pluck('number_of_infants')->toArray();
        $foreigners_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->pluck('number_of_foreigner')->toArray();
        $total_of_adults_as_of_now = array_sum($adults_as_of_today);
        $total_of_children_as_of_now = array_sum($children_as_of_now);
        $total_of_infants_as_of_now = array_sum($infants_as_of_now);
        $total_of_foreigner_as_of_now = array_sum($foreigners_as_of_now);
        $totalTouristsAsOfNow = $total_of_adults_as_of_now + $total_of_children_as_of_now + $total_of_infants_as_of_now + $total_of_foreigner_as_of_now;

        // total number of tourist per year
        $total_tourists_per_year = DB::table('tour_registrations')->select(
                DB::raw("DATE_FORMAT(tour_date, '%Y') as year"),
                  DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                  DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
                  DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner'),
                  )
                  ->where('verified', '1')
                  ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%Y')"))
                  ->get();

            // number of tourists
            $adults = TourRegistration::where('verified', '1')->pluck('number_of_adults')->toArray();
            $children = TourRegistration::where('verified', '1')->pluck('number_of_children')->toArray();
            $infants = TourRegistration::where('verified', '1')->pluck('number_of_infants')->toArray();
            $foreigners = TourRegistration::where('verified', '1')->pluck('number_of_foreigner')->toArray();
            $total_of_adults = array_sum($adults);
            $total_of_children = array_sum($children);
            $total_of_infants = array_sum($infants);
            $total_of_foreigner = array_sum($foreigners);
            $totalTourists = $total_of_adults + $total_of_children + $total_of_infants + $total_of_foreigner ;

            // day tourists
            $adults_day_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'day_tour')->pluck('number_of_adults')->toArray();
            $children_day_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'day_tour')->pluck('number_of_children')->toArray();
            $infants_day_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'day_tour')->pluck('number_of_infants')->toArray();
            $foreigners_day_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'day_tour')->pluck('number_of_foreigner')->toArray();
            $total_of_adults_day_tour = array_sum($adults_day_tourist);
            $total_of_children_day_tour = array_sum($children_day_tourist);
            $total_of_infants_day_tour = array_sum($infants_day_tourist);
            $total_of_foreigner_day_tour = array_sum($foreigners_day_tourist);
            $day_tourists = $total_of_adults_day_tour + $total_of_children_day_tour + $total_of_infants_day_tour + $total_of_foreigner_day_tour;

            // day tourist as of today
            $adults_day_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'day_tour')->pluck('number_of_adults')->toArray();
            $children_day_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'day_tour')->pluck('number_of_children')->toArray();
            $infants_day_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'day_tour')->pluck('number_of_infants')->toArray();
            $foreigners_day_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'day_tour')->pluck('number_of_foreigner')->toArray();
            $total_of_adults_day_tour_as_of_now = array_sum($adults_day_tourist_as_of_now);
            $total_of_children_day_tour_as_of_now = array_sum($children_day_tourist_as_of_now);
            $total_of_infants_day_tour_as_of_now = array_sum($infants_day_tourist_as_of_now);
            $total_of_foreigner_day_tour_as_of_now = array_sum($foreigners_day_tourist_as_of_now);
            $dayoTuristsAsOfNow = $total_of_adults_day_tour_as_of_now + $total_of_children_day_tour_as_of_now + $total_of_infants_day_tour_as_of_now + $total_of_foreigner_day_tour_as_of_now;

            // night tour
            $adults_night_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'overnight')->pluck('number_of_adults')->toArray();
            $children_night_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'overnight')->pluck('number_of_children')->toArray();
            $infants_night_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'overnight')->pluck('number_of_infants')->toArray();
            $foreigners_night_tourist = TourRegistration::where('verified', '1')->where('tour_type', 'overnight')->pluck('number_of_foreigner')->toArray();
            $total_of_adults_night_tour = array_sum($adults_night_tourist);
            $total_of_children_night_tour = array_sum($children_night_tourist);
            $total_of_infants_night_tour = array_sum($infants_night_tourist);
            $total_of_foreigner_night_tour = array_sum($foreigners_night_tourist);
            $night_tourists = $total_of_adults_night_tour + $total_of_children_night_tour + $total_of_infants_night_tour + $total_of_foreigner_night_tour;

            // night tourist as of today
            $adults_night_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'overnight')->pluck('number_of_adults')->toArray();
            $children_night_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'overnight')->pluck('number_of_children')->toArray();
            $infants_night_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'overnight')->pluck('number_of_infants')->toArray();
            $foreigners_night_tourist_as_of_now = TourRegistration::where('verified', '1')->where('tour_date', $as_of_now)->where('tour_type', 'overnight')->pluck('number_of_foreigner')->toArray();
            $total_of_adults_night_tour_as_of_now = array_sum($adults_night_tourist_as_of_now);
            $total_of_children_night_tour_as_of_now = array_sum($children_night_tourist_as_of_now);
            $total_of_infants_night_tour_as_of_now = array_sum($infants_night_tourist_as_of_now);
            $total_of_foreigner_night_tour_as_of_now = array_sum($foreigners_night_tourist_as_of_now);
            $nightTouristsAsOfNow = $total_of_adults_night_tour_as_of_now + $total_of_children_night_tour_as_of_now + $total_of_infants_night_tour_as_of_now + $total_of_foreigner_night_tour_as_of_now;

            //  $users = User::count();
            $usersJanuary = User::whereRoleIs('user')->whereMonth('created_at', 1)->count();
            $usersFebruary = User::whereRoleIs('user')->whereMonth('created_at', 2)->count();
            $usersMarch = User::whereRoleIs('user')->whereMonth('created_at', 3)->count();
            $usersApril = User::whereRoleIs('user')->whereMonth('created_at', 4)->count();
            $usersMay = User::whereRoleIs('user')->whereMonth('created_at', 5)->count();
            $usersJune = User::whereRoleIs('user')->whereMonth('created_at', 6)->count();
            $usersJuly = User::whereRoleIs('user')->whereMonth('created_at', 7)->count();
            $usersAugust = User::whereRoleIs('user')->whereMonth('created_at', 8)->count();
            $usersSeptember = User::whereRoleIs('user')->whereMonth('created_at', 9)->count();
            $usersOctober = User::whereRoleIs('user')->whereMonth('created_at', 10)->count();
            $usersNovember = User::whereRoleIs('user')->whereMonth('created_at', 11)->count();
            $usersDecember = User::whereRoleIs('user')->whereMonth('created_at', 12)->count();

            // analytics

            $total_tourists_per_specific_year = DB::table('tour_registrations')->select(
                DB::raw("DATE_FORMAT(tour_date, '%Y') as year"),
                DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
                DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
            )
            ->where('verified', '1')
            ->groupBy(DB::raw("DATE_FORMAT(tour_date, '%Y')"))
            ->get();

            return view('superadmin.dashboard.index', compact(
                'usersJanuary', 'usersFebruary','usersMarch', 'usersApril', 'usersMay',
                'usersJune', 'usersJuly', 'usersAugust', 'usersSeptember', 'usersOctober',
                'usersNovember', 'usersDecember', 'totalTourists', 'day_tourists', 'night_tourists',
                'total_tourists_per_year', 'today', 'totalTouristsAsOfNow', 'dayoTuristsAsOfNow',
                'nightTouristsAsOfNow', 'total_tourists_per_specific_year')
             );
        } elseif (Auth::user()->hasRole('owner')) {
             $business = User::whereRoleIs('owner')->with('properties', 'business_owner')->findOrFail(auth()->id());
            return view('owner.dashboard.index', compact('business'));
        } elseif (Auth::user()->hasRole('staff')) {
            $keyword = $request->get('search');
            $tickets = TourRegistration::with('user', 'property')->latest()->filter(request(['search']))->get();
            return view('staff.dashboard.index', compact('tickets', 'keyword'));
        }
    }
}
