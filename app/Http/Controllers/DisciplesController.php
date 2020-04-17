<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class DisciplesController extends Controller
{
    public function store(User $user){

        // dd($user);
        // console.log($user);
        // alert($user->id);


        return Auth::user()->disciples()->toggle($user->profile);    
    }
}
