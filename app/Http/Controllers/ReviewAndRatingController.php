<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\Review;
use App\Models\TourRegistration;
use Illuminate\Support\Facades\DB;

class ReviewAndRatingController extends Controller
{
    public function index() {
        $most_visited_places = DB::table('tour_registrations')
            ->join('properties', 'tour_registrations.property_id','=','properties.id')
            ->select('tour_registrations.property_id','properties.property_name',
                DB::raw('SUM(number_of_adults) as total_number_of_adults', ),
                DB::raw('SUM(number_of_children) as total_number_of_children'),
                DB::raw('SUM(number_of_infants) as total_number_of_infants'),
                DB::raw('SUM(number_of_foreigner) as total_number_of_foreigner'))
            ->where('status', 'already_left')
            ->groupBy('tour_registrations.property_id', 'properties.property_name')
            ->orderBy(DB::raw("`number_of_adults` + `number_of_children` + `number_of_infants` + `number_of_foreigner`"), 'desc')
            ->get();

        $properties = Properties::with('business_legal_documents', 'properties_details', 'frequently_questions', 'frequently_questions.frequently_answer', 'reviews')->has('reviews')->withCount('reviews')->orderBy('reviews_count', 'desc')->get();

        return view('superadmin.review-and-rating.index', compact('properties', 'most_visited_places'));
    }

    public function show($id) {
        $reviews = Review::with('user', 'properties')->where('property_id', $id)->get();

        return view('superadmin.review-and-rating.show', compact('reviews'));
    }

    public function showMostVisitedPlace($id) {
        $mostVisitedPlaces = TourRegistration::with('property')->where('property_id', $id)->get();

        return view('superadmin.review-and-rating.show-most-visited-place', compact('mostVisitedPlaces'));
    }
}
