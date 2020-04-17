<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class followsController extends Controller
{
    //

    public function store(User $user){

        return Auth::user()->following()->toggle($user->profile);
    }
}
