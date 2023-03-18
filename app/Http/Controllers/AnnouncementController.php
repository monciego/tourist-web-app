<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::latest()->paginate(5);
        return view('superadmin.announcement.index', compact('announcements'));
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
            'title' => 'required',
            'category' => 'nullable',
            'details' => 'nullable',
            'article_image' => ['nullable','mimes:png,jpg,jpeg,gif', 'max:2048'],
        ]);


        if($request->hasFile('article_image')) {
            $article_image = $request->file('article_image')->store('announcements', 'public');
        } else {
             $article_image = null;
        };

        Announcement::create([
            'title' => $request->title,
            'category' => $request->category,
            'details' => $request->details,
            'article_image' => $article_image,
        ]);

        return redirect(route('announcements.index'))->with('success-message', 'Announcement created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        return view('superadmin.announcement.show', [
            'announcement' => $announcement
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'category' => 'nullable',
            'details' => 'nullable',
            'article_image' => ['nullable','mimes:png,jpg,jpeg,gif', 'max:2048'],
        ]);


        if($request->hasFile('article_image')) {
            $article_image = $request->file('article_image')->store('announcements', 'public');
        } else {
             $article_image = $announcement->article_image;
        };

        $announcement->update([
            'title' => $request->title,
            'category' => $request->category,
            'details' => $request->details,
            'article_image' => $article_image,
        ]);

        return redirect(route('announcements.index'))->with('success-message', 'Announcement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect(route('announcements.index'))->with('danger-message', 'Announcement deleted successfully!');
    }
}
