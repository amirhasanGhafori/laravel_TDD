<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use App\filters\ThreadFilters;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    public function index(Channel $channel, ThreadFilters $filters)
    {
        $threads = $this->getThreads($channel, $filters);
        return view('threads', ['threads' => $threads]);
    }

    public function details($channel, Thread $thread)
    {
        return view('thread.details', [
            'thread' => $thread
        ]);
    }

    public function create()
    {
        return view('thread.create');
    }

    public function store()
    {

        request()->validate([
            'title' => 'required',
            'body' => 'required',
            'channel_id' => 'required'
        ]);

        $thread = Thread::create([
            'title' => request('title'),
            'body' => request('body'),
            'channel_id' => request('channel_id'),
            'user_id' => auth()->id(),
        ]);

        return redirect($thread->path());
    }




    protected function getThreads(Channel $channel, $filters)
    {
        $threads = Thread::latest()->filter($filters);
        if ($channel->exists) {
            $threads->where('channel_id', $channel->id);
        }
        $threads = $threads->get();

        return $threads;
    }
}
