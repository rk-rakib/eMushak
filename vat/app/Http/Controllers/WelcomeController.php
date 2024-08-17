<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $title='Index';
        return view('index', compact('title'));
    }
    public function companyInfo()
    {
        $title='Company Information';
        return view('companyInfo', compact('title'));
    }
    
    
}

