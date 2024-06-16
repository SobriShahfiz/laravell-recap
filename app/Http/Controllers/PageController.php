<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $publicServices = [
            'Service A',
            'Service B',
            'Service C',
            'Service D',
            'Service E',
        ]; // Array of public services
        
        return view('pages.services',['publicServices' => $publicServices]);
    }

    public function custom()
    {
        $numbers = [1, 2, 3, 4, 5]; // Array of numbers
        return view('pages.custom', ['numbers' => $numbers]);
    }
}
