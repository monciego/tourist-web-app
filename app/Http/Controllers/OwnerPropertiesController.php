<?php

namespace App\Http\Controllers;

use App\Models\OwnerProperties;
use App\Http\Requests\StoreOwnerPropertiesRequest;
use App\Http\Requests\UpdateOwnerPropertiesRequest;
use App\Models\Properties;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class OwnerPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $properties = Properties::where('user_id', $user_id)->get();
        return view('owner.properties.index', compact('properties'));
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

     /*
        Adding details (breadcrumbs)
    */
        public function storeBreadcrumbs (Request $request) {
         $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_tag = $request->property_tag;
                $data->property_est = $request->property_est;
                $data->property_address = $request->property_address;
                  $data->save();
        return redirect(route('owner-properties.index'));
    }
    /*
        Adding Store Description
    */
    public function storeDescription (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_description = $request->property_description;
                  $data->save();
        return redirect(route('owner-properties.index'));
    }
    /*
        Adding Store Details
    */
    public function storeDetails (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_details = $request->property_details;
                $data->save();
        return redirect(route('owner-properties.index'));
    }
    /*
        Adding Price
    */
    public function storePrice (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_price = $request->property_price;
                $data->save();
        return redirect(route('owner-properties.index'));
    }
    /*
        Adding Offers
    */
    public function storeOffers (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_offers = $request->property_offers;
                $data->save();
        return redirect(route('owner-properties.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OwnerProperties  $ownerProperties
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*  $ownerPropertiesIsNull = OwnerProperties::all();
        //  dd(is_null($ownerPropertiesIsNull));
         dd($ownerPropertiesIsNull->isEmpty()); */

        $properties = Properties::with('business_owner', 'business_legal_documents')->findOrFail($id); // add the properties details rlationship
        return view('owner.properties.show', compact('properties'));
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
    public function update(Request $request, $id)
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
