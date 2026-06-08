<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index(){
        $thread = Thread::latest()->get();
        return view('threads',['threads'=>$thread]);
    }

    public function details(Thread $thread){
        return view('thread.details',[
            'thread'=>$thread
        ]);
    }

}
