<?php

namespace App\Http\Controllers;

use App\Model\Likes;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
          //'user_id' =>auth()->id()
            'user_id'  => 1
            ]);
    }
    public function unLikeIt(Reply $reply)
    {
        $reply->like()->where(['user_id',auth()->id()])->first()->delete();
    }
}
