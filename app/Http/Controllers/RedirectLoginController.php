<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return view('superadmin.dashboard.index');
        } elseif (Auth::user()->hasRole('owner')) {
            return view('owner.dashboard.index');
        }
    }
}
