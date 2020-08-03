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

    public function edit(User $user)
    {
       return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
       $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'required|url'
        ]);

        $user->profile->update($data);

       return redirect()->route('profiles.show', compact('user'));
    }
}
