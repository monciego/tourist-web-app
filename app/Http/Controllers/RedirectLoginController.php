<?php

namespace App\Http\Controllers;

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
                'usersNovember', 'usersDecember' )
             );
        } elseif (Auth::user()->hasRole('owner')) {
            return view('owner.dashboard.index');
        }
    }
}
