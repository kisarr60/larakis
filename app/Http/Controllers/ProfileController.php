<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {
       return view('profiles.show', compact('user'));
    }
}
