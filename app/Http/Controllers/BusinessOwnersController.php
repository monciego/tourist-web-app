<?php

namespace App\Http\Controllers;

use App\Models\BusinessOwners;
use App\Http\Requests\StoreBusinessOwnersRequest;
use App\Http\Requests\UpdateBusinessOwnersRequest;
use App\Models\Categories;
use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;

class BusinessOwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = User::whereRoleIs('owner')->with('properties')->get();
        return view('superadmin.business-owners.index', compact('businesses'));
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
     * @param  \App\Http\Requests\StoreBusinessOwnersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'user_id' => 'required',
            'name_of_registrant' =>  'required',
            'owner_address' => 'nullable',
            'owner_gender' => 'nullable',
            'owner_date_of_birth' => 'nullable',
            'owner_contact_number' =>  'nullable',
         ]);

         BusinessOwners::create([
            'user_id' => $request->user_id,
            'name_of_registrant' => $request->name_of_registrant,
            'owner_address' => $request->owner_address,
            'owner_gender' => $request->owner_gender,
            'owner_date_of_birth' => $request->owner_date_of_birth,
            'owner_contact_number' => $request->owner_contact_number,
        ]);

        return redirect()->back()->with('success-message', 'Owner Information Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusinessOwners  $businessOwners
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $categories = Categories::all();
        $business = User::whereRoleIs('owner')->with('properties', 'business_owner')->findOrFail($id);
        $properties = Properties::where('user_id', $id)->with('business_legal_documents', 'properties_details')->get(); // with business owners / information
        return view('superadmin.business-owners.show', compact('business', 'properties', 'categories'));

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
