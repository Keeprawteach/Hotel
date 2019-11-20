<?php

namespace App\Http\Controllers;

/**
 * Pages Controller
 */
class PagesController extends Controller {

    public function getIndex() {
      return view('pages.welcome');
    }

    public function getAbout() {
      return view('pages.welcome#about');
    }

    public function getContact() {
      return view('pages.contact');
    }

}
