<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    function likeIt(Reply $reply){
        $reply->like()->create(['user_id' => '1']);
    }
    function unLikeIt(Reply $reply){
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
