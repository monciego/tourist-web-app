<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function tagline() {
    return view('pages.homepage.menu-list.tagline');
  }

  public function municipalSeal() {
    return view('pages.homepage.menu-list.municipal-seal');
  }

  public function historyOfDasol() {
    return view('pages.homepage.menu-list.history-of-dasol');
  }

  public function aboutDasol() {
    return view('pages.homepage.menu-list.about-dasol');
  }

  public function saltProductionAndProcessing() {
    return view('pages.homepage.menu-list.salt-production-and-processing');
  }

 public function dasolSaltIndustry() {
    return view('pages.homepage.menu-list.dasol-salt-industry');
 }

 public function safetyGuidelines() {
    return view('pages.homepage.menu-list.municipal-tourism-and-cultural-affairs');
 }

 public function asinFestivalBackStory() {
    return view('pages.homepage.menu-list.asin-festival-back-story');
 }

 public function missDasol() {
    return view('pages.homepage.menu-list.miss-dasol-and-asin-festival-history');
 }

 public function contact() {
    return view('pages.homepage.menu-list.contact');
 }

}
