<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\Review;
use App\Models\TourRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewAndRatingController extends Controller
{
    public function index() {

      /*   $most_visited = Properties::with('tour_registration')->has('reviews')->get();

        dd($most_visited); */

        $properties = Properties::with('business_legal_documents', 'properties_details', 'frequently_questions', 'frequently_questions.frequently_answer', 'reviews')->has('reviews')->withCount('reviews')->orderBy('reviews_count', 'desc')->get();
        return view('superadmin.review-and-rating.index', compact('properties'));
    }

    public function show($id) {


        $reviews = Review::with('user', 'properties')->where('property_id', $id)->get();
        return view('superadmin.review-and-rating.show', compact('reviews'));
    }
}
