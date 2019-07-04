<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;


class ProfilesController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
    	//dd(User::find($user));
    	//$user = User::find($user);
    	$user = User::findorFail($user);

        $follows = (auth()->user())? auth()->user()->following->contains($user->id) : false;

        return view('profiles.index', [
        	'user' => $user,
            'follows' => $follows,
        ]);
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image'))
        {
            $imagePath = request('image')->store('profile', 'public'); // pass in directory and driver

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }   
        
        //$user->profile->update($data);
        //auth()->user()->profile->update($data); // only authenticated user, no image
        auth()->user()->profile->update(array_merge(
                $data,
                $imageArray ?? []
        ));
    
        return redirect("profile/{$user->id}");
    }
}
 