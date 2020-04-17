<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfilesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {

        $followers = $user->profile->followers;

        $follows = (Auth::user() ? Auth::user()->following->contains($user->id) : false);

        $discipled = true;

        return view('profiles.index',compact('user','followers','follows','discipled'));
    }

    public function home_profile(){

        $user = Auth::user();

        $followers = $user->profile->followers;

        $follows = false;

        $discipled = Auth::user()->disciples->contains($user->id);

        return view('profiles.index',compact('user','followers','follows','discipled'));
    
    }
}
