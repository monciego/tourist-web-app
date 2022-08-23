<?php

namespace App\Http\Controllers;

use App\Models\OwnerProperties;
use App\Http\Requests\StoreOwnerPropertiesRequest;
use App\Http\Requests\UpdateOwnerPropertiesRequest;

class OwnerPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('owner.properties.index');
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
     * @param  \App\Http\Requests\StoreOwnerPropertiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOwnerPropertiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OwnerProperties  $ownerProperties
     * @return \Illuminate\Http\Response
     */
    public function show(OwnerProperties $ownerProperties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OwnerProperties  $ownerProperties
     * @return \Illuminate\Http\Response
     */
    public function edit(OwnerProperties $ownerProperties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOwnerPropertiesRequest  $request
     * @param  \App\Models\OwnerProperties  $ownerProperties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOwnerPropertiesRequest $request, OwnerProperties $ownerProperties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OwnerProperties  $ownerProperties
     * @return \Illuminate\Http\Response
     */
    public function destroy(OwnerProperties $ownerProperties)
    {
        //
    }
}
