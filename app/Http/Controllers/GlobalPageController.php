<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalPageController extends Controller
{
    public function index()
    {
        return view('layouts.aboutus.index');
    }
}
