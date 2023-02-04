<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use App\Models\OwnerProperties;
use App\Models\Properties;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;
class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // gets random data
        $properties = Properties::with('business_owner', 'business_legal_documents', 'properties_details')->inRandomOrder()->limit(4)->get();
        $homepage_datas = Homepage::get();

        // weather
        $location = 'Dasol';
        $apiKey = '698070466b3afdc7587e714df356d6a3';
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
        $currentWeather = $response->json();

        return view('pages.homepage.index', compact('properties', 'homepage_datas', 'currentWeather'));
    }

    /**
     * Adding homepage image
     *
     * @return \Illuminate\Http\Response
     */
        public function storeHomepageImage (Request $request) {
        $randomNumber = random_int(1000, 9999);
        $data = Homepage::updateOrCreate(['id' => Auth::user()->id]);
                if ($request->hasFile('homepage_image')) {
                    $imagePath = $request->file('homepage_image')->storeAs(
                    'homepage_image',
                    $randomNumber . '.' . uniqid() . '.' . $request->file('homepage_image')->getClientOriginalExtension(),
                    'public');
                }
                $data->id = Auth::user()->id;
                $data->homepage_image = $imagePath;
                 $data->save();
        return redirect(route('homepage'));
    }

    /**
     * Adding homepage tagline
     *
     * @return \Illuminate\Http\Response
     */
        public function storeHomepageTagLine (Request $request) {

        $data = Homepage::updateOrCreate(['id' => Auth::user()->id]);
            $data->id = Auth::user()->id;
            $data->homepage_tagline = $request->homepage_tagline;
            $data->save();
        return redirect(route('homepage'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $users = User::where('id', '!=', Auth::id())->get();

    /*
            $lat = 16.1149123;
            $lon = 119.9683174; */

        $property_id = OwnerProperties::where('id', $id)->first('property_id');
        // dd($property_id);

        $position = Location::get();
        $lat = $position->latitude;
        $lon = $position->longitude;
/*         This is called Haversine formula and the constant 6371 is used to get distance in KM,
        while 3959 is used to get distance in miles. */
		$distance = DB::table('owner_properties')->select("owner_properties.property_id"
		        ,DB::raw("6371 * acos(cos(radians(" . $lat . "))
		        * cos(radians(owner_properties.latitude))
		        * cos(radians(owner_properties.longitude) - radians(" . $lon . "))
		        + sin(radians(" .$lat. "))
		        * sin(radians(owner_properties.latitude))) AS distance"))
                ->where('owner_properties.property_id', $id)
		        ->get();

        $listing = Properties::with('business_owner', 'business_legal_documents', 'properties_details')->findOrFail($id); // add the properties details rlationship

         if(empty($listing->properties_details->property_tag)) {
             return abort(404);
         }

        return view('pages.listing.show', compact('listing', 'users', 'distance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
