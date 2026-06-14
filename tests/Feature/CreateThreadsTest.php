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
    $thread = make(Thread::class);
    $response = $this->post('/threads', $thread->toArray());



    $this->assertDatabaseHas('threads', [
        'title' => $thread->title,
        'body' => $thread->body,
        'user_id' => auth()->id()
    ]);

    $this->get($response->headers->get('Location'))->assertSee($thread->title);
});



test('a_thread_blongTo_a_channel',function(){
    $thread = create(Thread::class);
    $this->assertInstanceOf(Channel::class,$thread->channel);
});



test('a_thread_requires_a_title',function(){
    $this->signIn();
    $thread = make(Thread::class,['title'=>null,'body'=>null]);
    $this->post('/threads',$thread->toArray())->assertSessionHasErrors('title');
});


test('a_thread_requires_a_channel_id',function(){
    $this->signIn();
    $thread = make(Thread::class,['channel_id'=>null]);
    $this->post('/threads',$thread->toArray())->assertSessionHasErrors('channel_id');
});