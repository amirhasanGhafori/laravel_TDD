<?php

use App\Models\Channel;
use App\Models\Thread;
use App\Models\User;




test('guests_may_not_create_threads', function () {
    $thread = create(Thread::class);
    
    $this->post('/threads', $thread->toArray())->assertRedirect('/login');
    $this->get('threads/create')->assertRedirect('/login');
});


test('guests_cannot_see_the_create_threads', function () {
    $this->get('/threads/create')->assertRedirect('/login');
});

test('an_authenticated_user_can_create_new_forum_threads', function () {
    $this->signIn();
    $thread = create(Thread::class);
    $this->post('/threads', $thread->toArray());



    $this->assertDatabaseHas('threads', [
        'title' => $thread->title,
        'body' => $thread->body,
        'user_id' => auth()->id()
    ]);

    $this->get($thread->path())->assertSee($thread->title);
});



test('a_thread_blongTo_a_channel',function(){
    $thread = create(Thread::class);
    $this->assertInstanceOf(Channel::class,$thread->channel);
});
