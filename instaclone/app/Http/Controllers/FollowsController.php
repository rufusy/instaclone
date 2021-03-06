<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class FollowsController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(User $user)
    {   
    	// connected the passed in user id's profile to the 
    	// logged in user
        return auth()->user()->following()->toggle($user->profile);
    }
}
