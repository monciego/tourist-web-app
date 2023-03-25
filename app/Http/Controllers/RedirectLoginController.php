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

        // total number of tourist per year
        $total_tourists_per_year = DB::table('tour_registrations')->select('tour_date',
                  DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                  DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
                  DB::raw( 'SUM(number_of_foreigner) as total_number_of_foreigner')
                  )
                  ->where('status', 'already_left')
                  ->groupBy('tour_date')
                  ->get();


                    // total unclassified of tourist per year

                  $total_unclassified_tourists_per_year = DB::table('register_unclassified_tourists')->select('created_at',
                  DB::raw( 'SUM(number_of_adults) as total_number_of_adults'),
                  DB::raw( 'SUM(number_of_children) as total_number_of_children'),
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants'),
                  DB::raw( 'SUM(number_of_foreigners) as total_number_of_foreigners')
                  )
                  ->groupBy('created_at')
                  ->get();

                $x = $total_tourists_per_year->merge($total_unclassified_tourists_per_year);



            // number of tourists
            $adults = TourRegistration::where('status', 'already_left')->pluck('number_of_adults')->toArray();
            $children = TourRegistration::where('status', 'already_left')->pluck('number_of_children')->toArray();
            $infants = TourRegistration::where('status', 'already_left')->pluck('number_of_infants')->toArray();
            $foreigners = TourRegistration::where('status', 'already_left')->pluck('number_of_foreigner')->toArray();
            $infants_unclassified = RegisterUnclassifiedTourist::pluck('number_of_adults')->toArray();
            $children_unclassified = RegisterUnclassifiedTourist::pluck('number_of_children')->toArray();
            $adults_unclassified = RegisterUnclassifiedTourist::pluck('number_of_infants')->toArray();
            $foreigners_unclassified = RegisterUnclassifiedTourist::pluck('number_of_foreigners')->toArray();
            $total_of_adults = array_sum($adults);
            $total_of_children = array_sum($children);
            $total_of_infants = array_sum($infants);
            $total_of_foreigner = array_sum($foreigners);
            $total_of_infants_unclassified = array_sum($infants_unclassified);
            $total_of_children_unclassified = array_sum($children_unclassified);
            $total_of_adults_unclassified = array_sum($adults_unclassified);
            $total_of_foreigners_unclassified = array_sum($foreigners_unclassified);
            $totalTourists = $total_of_adults + $total_of_children + $total_of_infants +
            $total_of_infants_unclassified + $total_of_adults_unclassified + $total_of_children_unclassified + $total_of_foreigner + $total_of_foreigners_unclassified;

            // day tourists
            $day_tourists = TourRegistration::where('status', 'already_left')->where('tour_type', 'day_tour')->count();
            $night_tourists = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->count();

            // unclassified
            $total_unclassified_tourists = $total_of_foreigners_unclassified + $total_of_infants_unclassified + $total_of_adults_unclassified + $total_of_children_unclassified;

            //  $users = User::count();
            // $users = DB::table('role_user')->where('role_id', 3)->get();
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
            return view('superadmin.dashboard.index', compact(
                'usersJanuary', 'usersFebruary','usersMarch', 'usersApril', 'usersMay',
                'usersJune', 'usersJuly', 'usersAugust', 'usersSeptember', 'usersOctober',
                'usersNovember', 'usersDecember', 'totalTourists', 'day_tourists', 'night_tourists', 'total_tourists_per_year', 'total_unclassified_tourists', 'total_unclassified_tourists_per_year', 'x' )
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
