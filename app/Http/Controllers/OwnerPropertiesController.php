<?php

namespace App\Http\Controllers;

use App\Models\OwnerProperties;
use App\Http\Requests\StoreOwnerPropertiesRequest;
use App\Http\Requests\UpdateOwnerPropertiesRequest;
use App\Models\Properties;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
        return redirect()->back()->with('success-message', 'Data Saved Successfully!');
    }
    /*
        Adding Store Description
    */
    public function storeDescription (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_description = $request->property_description;
                  $data->save();
             return redirect()->back()->with('success-message', 'Description Saved Successfully!');
    }
    /*
        Adding Store Details
    */
    public function storeDetails (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_details = $request->property_details;
                $data->save();
              return redirect()->back()->with('success-message', 'Details Saved Successfully!');
    }
    /*
        Adding Price
    */
    public function storePrice (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_price = $request->property_price;
                $data->save();
              return redirect()->back()->with('success-message', 'Price Saved Successfully!');
    }
    /*
        Adding Price
    */
    public function storeLocation (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->latitude = $request->latitude;
                $data->longitude = $request->longitude;
                $data->save();
             return redirect()->back()->with('success-message', 'Location Saved Successfully!');
    }
    /*
        Adding Offers
    */
    public function storeOffers (Request $request) {
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;
                $data->property_offers = $request->property_offers;
                $data->save();
              return redirect()->back()->with('success-message', 'Offers Saved Successfully!');
    }
    /*
        Adding Image One
    */
    public function storeImageOne (Request $request) {
        $randomNumber = random_int(1000, 9999);
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;

                if ($request->hasFile('image_one')) {
                    $imagePath = $request->file('image_one')->storeAs(
                    'image-one',
                    $randomNumber . '.' . uniqid() . '.' . $request->file('image_one')->getClientOriginalExtension(),
                    'public');
                }
                $data->image_one = $imagePath;
                 $data->save();
        return redirect()->back()->with('success-message', 'Image Saved Successfully!');
    }
    /*
        Adding Image Two
    */
    public function storeImageTwo (Request $request) {
        $randomNumber = random_int(1000, 9999);
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;

                if ($request->hasFile('image_two')) {
                    $imagePath = $request->file('image_two')->storeAs(
                    'image-two',
                    $randomNumber . '.' . uniqid() . '.' . $request->file('image_two')->getClientOriginalExtension(),
                    'public');
                }
                $data->image_two = $imagePath;
                 $data->save();
           return redirect()->back()->with('success-message', 'Image Saved Successfully!');
    }
    /*
        Adding Image three
    */
    public function storeImageThree (Request $request) {
        $randomNumber = random_int(1000, 9999);
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;

                if ($request->hasFile('image_three')) {
                    $imagePath = $request->file('image_three')->storeAs(
                    'image-three',
                    $randomNumber . '.' . uniqid() . '.' . $request->file('image_three')->getClientOriginalExtension(),
                    'public');
                }
                $data->image_three = $imagePath;
                 $data->save();
         return redirect()->back()->with('success-message', 'Image Saved Successfully!');
    }
    /*
        Adding Image Four
    */
    public function storeImageFour (Request $request) {
        $randomNumber = random_int(1000, 9999);
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;

                if ($request->hasFile('image_four')) {
                    $imagePath = $request->file('image_four')->storeAs(
                    'image-four',
                    $randomNumber . '.' . uniqid() . '.' . $request->file('image_four')->getClientOriginalExtension(),
                    'public');
                }
                $data->image_four = $imagePath;
                 $data->save();
        return redirect()->back()->with('success-message', 'Image Saved Successfully!');
    }
    /*
        Adding Image Four
    */
    public function storeFeature (Request $request) {
        $randomNumber = random_int(1000, 9999);
        $data = OwnerProperties::updateOrCreate(['property_id' => $request->property_id]);
                $data->property_id = $request->property_id;

                if ($request->hasFile('feature')) {
                    $imagePath = $request->file('feature')->storeAs(
                    'feature',
                    $randomNumber . '.' . uniqid() . '.' . $request->file('feature')->getClientOriginalExtension(),
                    'public');
                }
                $data->feature = $imagePath;
                 $data->save();
         return redirect()->back()->with('success-message', 'Image Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OwnerProperties  $ownerProperties
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $properties = Properties::with('business_owner', 'business_legal_documents', 'properties_details', 'frequently_questions')->findOrFail($id); // add the properties details rlationship
           if($properties->user_id != auth()->id()) {
             abort(403, 'Unauthorized Action');
            }
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
    public function removeBreadCrumbs($id)
    {
         OwnerProperties::where('property_id', $id)->update([
            'property_tag' => null,
            'property_est' => null,
            'property_address' => null

        ]);
       return redirect()->back()->with('danger-message', 'Data Deleted Successfully!');
    }
    /*
        remove description
    */
    public function removeDescription($id)
    {
         OwnerProperties::where('property_id', $id)->update([
            'property_description' => null,
        ]);
       return redirect()->back()->with('danger-message', 'Description Deleted Successfully!');
    }
    /*
        remove offers
    */
    public function removeOffers($id)
    {
         OwnerProperties::where('property_id', $id)->update([
            'property_offers' => null,
        ]);
       return redirect()->back()->with('danger-message', 'Offers Deleted Successfully!');
    }
    /*
        remove details
    */
    public function removeDetails($id)
    {
         OwnerProperties::where('property_id', $id)->update([
            'property_details' => null,
        ]);
       return redirect()->back()->with('danger-message', 'Details Deleted Successfully!');
    }
    /*
        remove details
    */
    public function removePrice($id)
    {
         OwnerProperties::where('property_id', $id)->update([
            'property_price' => null,
        ]);
       return redirect()->back()->with('danger-message', 'Price Deleted Successfully!');
    }
    /*
        remove image one
    */
    public function removeImageOne($id) {
         OwnerProperties::where('property_id', $id)->update([
            'image_one' => null,
        ]);
         return redirect()->back()->with('danger-message', 'Image Deleted Successfully!');
    }
    /*
        remove image two
    */
    public function removeImageTwo($id) {
         OwnerProperties::where('property_id', $id)->update([
            'image_two' => null,
        ]);
       return redirect()->back()->with('danger-message', 'Image Deleted Successfully!');
    }
    /*
        remove image three
    */
    public function removeImageThree($id) {
         OwnerProperties::where('property_id', $id)->update([
            'image_three' => null,
        ]);
        return redirect()->back()->with('danger-message', 'Image Deleted Successfully!');
    }
    /*
        remove image four
    */
    public function removeImageFour($id) {
         OwnerProperties::where('property_id', $id)->update([
            'image_four' => null,
        ]);
       return redirect()->back()->with('danger-message', 'Image Deleted Successfully!');
    }
    /*
        remove feature
    */
    public function removeFeature($id) {
         OwnerProperties::where('property_id', $id)->update([
            'feature' => null,
        ]);
       return redirect()->back()->with('danger-message', 'Image Deleted Successfully!');
    }
}
