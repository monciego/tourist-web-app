<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Http\Requests\StorePropertiesRequest;
use App\Http\Requests\UpdatePropertiesRequest;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePropertiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $formFields = $request->validate([
            'user_id' => 'required',
            'category_id' =>  'required',
            'property_name' => 'required',
            'permit_number' => 'nullable',
            'property_description' => 'nullable',
            'property_address' => 'nullable',
            'date_of_registration' => 'nullable',
         ]);

         Properties::create([
            'user_id' => $request->user_id,
            'permit_number' => $request->permit_number,
            'property_name' => $request->property_name,
            'property_description' => $request->property_description,
            'property_address' => $request->property_address,
            'date_of_registration' => $request->date_of_registration,
            'category_id' => $request->category_id,
        ]);

        return redirect()->back()->with('success-message', 'Property Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function show(Properties $properties)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function edit(Properties $properties)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertiesRequest  $request
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertiesRequest $request, Properties $properties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Properties  $properties
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properties $properties)
    {
        //
    }
}
