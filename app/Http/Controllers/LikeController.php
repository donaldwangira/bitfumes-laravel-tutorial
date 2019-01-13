<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Limit access to resources usin middleware
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }
    function likeIt(Reply $reply){
        $reply->like()->create(['user_id' => '1']);
    }
    function unLikeIt(Reply $reply){
        $reply->like()->where('user_id', '1')->first()->delete();
    }
}
