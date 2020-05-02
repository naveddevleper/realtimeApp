<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Likes;
use App\Model\Question;
use App\Model\Reply;

class Reply extends Model
{
    protected $guarded = [];
    public function question()
    {
    	return $this->belognsTo(Question::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function like()
    {
    	return $this->hasMany(Likes::class);
    }
}
