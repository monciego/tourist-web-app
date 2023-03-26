<?php

namespace App\Http\Controllers;

use App\Models\RegisterUnclassifiedTourist;
use App\Models\TourRegistration;
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
            'property_id' => 'nullable',
            'user_id' => 'nullable',
            'tour_date' => 'required',
            'tour_contact_person' => 'nullable',
            'tour_contact_number' => 'nullable',
            'tour_email' => 'nullable',
            'tour_type' => 'nullable',
            'number_of_adults' => 'nullable',
            'number_of_children' => 'nullable',
            'number_of_infants' => 'nullable',
            'property_name' => 'required',
            'time_in' => 'nullable',
            'time_out' => 'nullable',
            'environment_fee' => 'nullable',
            'entrance_fee' => 'nullable',
        ]);

        TourRegistration::create([
            'property_id' => 1,
            'user_id' => auth()->user()->id,
            'tour_code' => $this->generateUniqueCode(),
            'tour_contact_number' => $this->generateUniqueCode(),
            'tour_email' => $this->generateUniqueCode(),
            'tour_type' => $this->generateUniqueCode(),
            'tour_contact_person' => $request->tour_contact_person,
            'tour_date' => $request->tour_date,
            'number_of_adults' => $request->number_of_adults,
            'number_of_children' => $request->number_of_children,
            'number_of_infants' => $request->number_of_infants,
            'number_of_foreigner' => $request->number_of_foreigner,
            // unclassified
            'property_name' => $request->property_name,
            'time_in' => $request->time_in,
            'time_out' => $request->time_out,
            'environment_fee' => $request->environment_fee,
            'entrance_fee' => $request->entrance_fee,
            'status' => 'already_left',
        ]);

        return redirect(route('register-a-tour.index'))->with('success-message', 'Registered successfully!');
    }

         /**
     * Generates code
     *
     * @return response()
     */
    public function generateUniqueCode()
    {
        $code = random_int(1000000000, 9999999999);

        return $code;
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
