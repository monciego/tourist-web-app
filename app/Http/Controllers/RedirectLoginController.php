<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\TourRegistration;
use App\Models\User;
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
                  DB::raw( 'SUM(number_of_infants) as total_number_of_infants')
                  )
                  ->where('status', 'already_left')
                  ->groupBy('tour_date')
                  ->get();

            // number of tourists
            $adults = TourRegistration::where('status', 'already_left')->pluck('number_of_adults')->toArray();
            $children = TourRegistration::where('status', 'already_left')->pluck('number_of_children')->toArray();
            $infants = TourRegistration::where('status', 'already_left')->pluck('number_of_infants')->toArray();
            $total_of_adults = array_sum($adults);
            $total_of_children = array_sum($children);
            $total_of_infants = array_sum($infants);
            $totalTourists = $total_of_adults + $total_of_children + $total_of_infants;

            // day tourists
            $day_tourists = TourRegistration::where('status', 'already_left')->where('tour_type', 'day_tour')->count();
            $night_tourists = TourRegistration::where('status', 'already_left')->where('tour_type', 'overnight')->count();


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
                'usersNovember', 'usersDecember', 'totalTourists', 'day_tourists', 'night_tourists', 'total_tourists_per_year' )
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
