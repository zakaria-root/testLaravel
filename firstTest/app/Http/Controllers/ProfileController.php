<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('profile.index', compact('user'));
    }

    public  function edite(User $user)
    {

        return view('profile.edite', compact('user'));
    }


    public function update(User $user)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => ''
        ]);

        $user->profile->update($data);
        return redirect("/profile/{$user->id}");
    }

}
