<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use Illuminate\Http\Request;

class ActivitiesControllre extends Controller
{
    public function index(Request $request)
    {
        $activities = Activities::all();
        return view('activities.index', compact('activities'));
    }
}
