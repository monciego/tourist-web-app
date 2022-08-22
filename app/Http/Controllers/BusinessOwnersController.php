<?php

namespace App\Http\Controllers;

use App\Models\BusinessOwners;
use App\Http\Requests\StoreBusinessOwnersRequest;
use App\Http\Requests\UpdateBusinessOwnersRequest;
use App\Models\User;

class BusinessOwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = User::whereRoleIs('owner')->with('business_owner')->get();
        return view('superadmin.business-owners.index', compact('businesses'));
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
     * @param  \App\Http\Requests\StoreBusinessOwnersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusinessOwnersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessOwners  $businessOwners
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessOwners $businessOwners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusinessOwners  $businessOwners
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessOwners $businessOwners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBusinessOwnersRequest  $request
     * @param  \App\Models\BusinessOwners  $businessOwners
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessOwnersRequest $request, BusinessOwners $businessOwners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusinessOwners  $businessOwners
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessOwners $businessOwners)
    {
        //
    }
}
