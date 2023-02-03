<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return Inertia::render('Welcome');
    }
}
