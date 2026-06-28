<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    public function store(Reply $reply){


        $reply->favorite();


        // return DB::table('favorites')->insert([
        //     'user_id'=>auth()->id(),
        //     'favorited_id'=>$reply->id,
        //     'favorited_type'=>get_class($reply)
        // ]);
    }
}
