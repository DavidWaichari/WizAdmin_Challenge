<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function processForm(Request $request)
    {       
        return view ('welcome');
    }
}
