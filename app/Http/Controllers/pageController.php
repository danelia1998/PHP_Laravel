<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHomePage() {
        $title = "Home Page";
        return view('pages.content-page')->with('title', $title)->with('theme','light')->with('footer', true);
    }

    public function getAboutPage() {
        $title = "About Page";
        return view('pages.content-page')->with('title', $title)->with('theme','dark')->with('footer', true);
    }

    public function getContactPage() {
        $title = "Contact Page";
        return view('pages.content-page')->with('title', $title)->with('theme','light')->with('footer', false);
    }


}