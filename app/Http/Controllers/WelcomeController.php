<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $designs = Design::all();
        return view('welcome',compact('designs'));
    }
}
