<?php

namespace App\Http\Controllers;

use App\Models\FrequentlyQuestion;
use App\Models\OwnerProperties;
use App\Models\Properties;
use Illuminate\Http\Request;

class FrequentlyQuestionController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new question.
     *
     * @return \Illuminate\Http\Response
     */
    public function createQuestions(Properties $properties)
    {
        // $owner_properties = Properties::with('business_owner', 'business_legal_documents',
        // 'properties_details', 'frequently_questions')->findOrFail($properties->id);

        $owner_properties = Properties::with('business_owner', 'business_legal_documents',
        'properties_details', 'frequently_questions', 'frequently_questions.frequently_answer')->findOrFail($properties->id);

        // dd($owner_properties);
        return view('owner.properties.faqs.create', compact('owner_properties'));
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
            'property_id' => 'required',
            'faq_questions' => 'required',
         ]);

          FrequentlyQuestion::create([
            'property_id' => $request->property_id,
            'faq_questions' => $request->faq_questions,
        ]);

        return redirect()->back()->with('success-message', 'Question Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrequentlyQuestion  $frequentlyQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(FrequentlyQuestion $frequentlyQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrequentlyQuestion  $frequentlyQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(FrequentlyQuestion $frequentlyQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrequentlyQuestion  $frequentlyQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrequentlyQuestion $frequentlyQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrequentlyQuestion  $frequentlyQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrequentlyQuestion $frequentlyQuestion)
    {
        //
    }
}
