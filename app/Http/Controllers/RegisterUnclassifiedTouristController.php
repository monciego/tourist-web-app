<?php

namespace App\Http\Controllers;

use App\Models\RegisterUnclassifiedTourist;
use Illuminate\Http\Request;

class RegisterUnclassifiedTouristController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('staff.register-a-tour.index');
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
         $formFields = $request->validate([
            'property_name' => 'required',
            'contact_person' => 'required',
            'date_registered' => 'required',
            'time_in' => 'required',
            'time_out' => 'nullable',
            'environment_fee' => 'nullable',
            'entrance_fee' => 'nullable',
            'number_of_children' => 'nullable',
            'number_of_adults' => 'nullable',
            'number_of_infants' => 'nullable',
        ]);


        RegisterUnclassifiedTourist::create([
            'property_name' => $request->property_name,
            'contact_person' => $request->contact_person,
            'date_registered' => $request->date_registered,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
            'environment_fee' => $request->environment_fee,
            'entrance_fee' => $request->entrance_fee,
            'number_of_children' => $request->number_of_children,
            'number_of_adults' => $request->number_of_adults,
            'number_of_infants' => $request->number_of_infants,
        ]);

        return redirect(route('register-a-tour.index'))->with('success-message', 'Registered successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisterUnclassifiedTourist  $registerUnclassifiedTourist
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterUnclassifiedTourist $registerUnclassifiedTourist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisterUnclassifiedTourist  $registerUnclassifiedTourist
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterUnclassifiedTourist $registerUnclassifiedTourist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisterUnclassifiedTourist  $registerUnclassifiedTourist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterUnclassifiedTourist $registerUnclassifiedTourist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisterUnclassifiedTourist  $registerUnclassifiedTourist
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterUnclassifiedTourist $registerUnclassifiedTourist)
    {
        //
    }
}
