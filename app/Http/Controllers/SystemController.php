<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class SystemController extends Controller
{

    public function home()
    {
        return view('pages.home');
    }
}
