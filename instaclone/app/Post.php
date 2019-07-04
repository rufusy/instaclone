<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $guarded = []; // do not guard any fileds

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
