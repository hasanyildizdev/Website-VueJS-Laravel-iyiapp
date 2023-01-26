<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Resources\ProjectResource;
use App\Models\Project;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $projects=ProjectResource::collection(Project::all());
        return Inertia::render('Welcome',compact('projects'));
    }
}
