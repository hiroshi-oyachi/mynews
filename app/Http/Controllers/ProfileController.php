<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profiles = Profile::all()->sortByDesc('updated_at');

        if (count($profiles) > 0) {
            $headline = $profiles->shift();
        } else {
            $headline = null;
        }
        return view('profile.index', ['headline' => $headline, 'profiles' => $profiles]);
    }
}
