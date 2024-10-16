<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        return view('home', [
            'company_name' => 'MDB INDONESIA',
            'tagline' => 'Software Development and Programming School',
            'cta_text' => 'Hubungi Kami',
        ]);

        
    }
}


