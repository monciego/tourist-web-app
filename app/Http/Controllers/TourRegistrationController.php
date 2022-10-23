<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\TourRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Builder\Property;

class TourRegistrationController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thankYouForRegistrationPage($id)
    {



        $registrationData = TourRegistration::where('user_id', auth()->id())->with('user', 'property')->findOrFail($id);
        return view('user.thank-you.index', compact('registrationData'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function statusForm()
    {
        return view('user.status-form.index');
    }
    /**
     * Register a tour.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerTour($id)
    {
       $property = Properties::with('business_owner', 'business_legal_documents', 'properties_details')->findOrFail($id);
       $date = Carbon::now()->format('Y-m-d');
       return view('user.tour-registration.register', compact('property', 'date'));
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
        $validated = $request->validate([
            'property_id' => 'required',
            'user_id' => 'required',
            'tour_date' => 'required',
            'tour_contact_person' => 'required',
            'tour_contact_number' => 'required',
            'tour_email' => 'required',
            'tour_type' => 'required',
            'number_of_adults' => 'nullable',
            'number_of_children' => 'nullable',
            'number_of_infants' => 'nullable',
            'tour_message' => 'nullable',
        ]);

        TourRegistration::create([
            'property_id' => $request->property_id,
            'user_id' => $request->user_id,
            'tour_code' => $this->generateUniqueCode(),
            'tour_date' => $request->tour_date,
            'tour_contact_person' => $request->tour_contact_person,
            'tour_contact_number' => $request->tour_contact_number,
            'tour_email' => $request->tour_email,
            'tour_type' => $request->tour_type,
            'number_of_adults' => $request->number_of_adults,
            'number_of_children' => $request->number_of_children,
            'number_of_infants' => $request->number_of_infants,
            'tour_message' => $request->tour_message,
        ]);

        return redirect(route('your-tickets.index'));
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
     * @param  \App\Models\TourRegistration  $tourRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(TourRegistration $tourRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TourRegistration  $tourRegistration
     * @return \Illuminate\Http\Response
     */
    public function edit(TourRegistration $tourRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TourRegistration  $tourRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourRegistration $tourRegistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TourRegistration  $tourRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourRegistration $tourRegistration)
    {
        //
    }
}
