<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show($slug)
    {
        $profile = Profile::where('slug', $slug)->first();
        return view('tut.profile', compact('profile'));
    }
}
