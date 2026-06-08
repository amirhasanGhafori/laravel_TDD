<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReplyController extends Controller
{
    public function store(Thread $thread){
        Log::info($thread);
        $thread->addReply([
            'body'=>request('body'),
            'user_id'=>auth()->id(),
        ]);

        return redirect($thread->path());
    }
}
