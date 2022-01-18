<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActController extends Controller
{
    public function indexAct()
    {
        return view('act');
    }
}
