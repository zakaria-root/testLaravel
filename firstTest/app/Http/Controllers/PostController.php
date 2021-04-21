<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('postes.create');

    }

    public function store(){

            $data = request()->validate([
            'postCaption' => 'required',
            'image' => ['required', 'image']
        ]);
        
        $imagePath = request('image')->store('images', 'public');
        Auth()->user()->posts()->create([
            'postCaption' => $data['postCaption'],
            'image' => $imagePath
        ]);
        return redirect('/profile/' . auth()->user()->id);
    }

}
