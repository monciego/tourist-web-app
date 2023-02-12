<?php

namespace App\Http\Controllers;

use App\Models\FrequentlyAnswer;
use App\Models\FrequentlyQuestion;
use App\Models\Properties;
use Illuminate\Http\Request;

class FrequentlyAnswerController extends Controller
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
     * Show the form for creating an answer.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAnswers(FrequentlyQuestion $frequentlyQuestion)
    {
        // $owner_properties = Properties::with('business_owner', 'business_legal_documents', 'properties_details', 'frequently_questions')->findOrFail($properties->id);
        $question = FrequentlyQuestion::with('frequently_answer')->findOrFail($frequentlyQuestion->id);
        return view('owner.properties.faqs.create-answer', compact('question'));
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
            'question_id' => 'required',
            'faq_answers' => 'required',
         ]);

          FrequentlyAnswer::create([
            'question_id' => $request->question_id,
            'faq_answers' => $request->faq_answers,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FrequentlyAnswer  $frequentlyAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(FrequentlyAnswer $frequentlyAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FrequentlyAnswer  $frequentlyAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(FrequentlyAnswer $frequentlyAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FrequentlyAnswer  $frequentlyAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrequentlyAnswer $frequentlyAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FrequentlyAnswer  $frequentlyAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrequentlyAnswer $frequentlyAnswer)
    {
        //
    }
}
