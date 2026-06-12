<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    public function index()
    {
        $thread = Thread::latest()->get();
        return view('threads', ['threads' => $thread]);
    }

    public function details($channel,Thread $thread)
    {
        return view('thread.details', [
            'thread' => $thread
        ]);
    }

    public function create(){
        return view('thread.create');
    }

    public function store()
    {

        $thread = Thread::create([
            'title' => request('title'),
            'body' => request('body'),
            'channel_id'=>request('channel_id'),
            'user_id'=>auth()->id(),
        ]);

        return to_route('thread.details',['thread'=>$thread->id]);
    }
}
