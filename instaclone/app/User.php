<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', 
    ];


    protected static function boot()
    {
        parent::boot(); // called when booting up this model
        // if we overide this method we still want to call the parent model

        // created event gets fired up whenever a new user is creted
        static::created(function ($user) {
            $user->profile()->create([
                'title' => 'new title',
            ]);
        });
    }



    public function profile()
    {
        return $this->hasOne(Profile::class);
    }



    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at','DESC');
    }



    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }
}
 