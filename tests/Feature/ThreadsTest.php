<?php

use App\Models\Channel;
use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->thread = Thread::factory()->create();
});

test('can_see_threads_page', function () {
    $response = $this->get('/threads');
    $response->assertStatus(200);
});


test('a_user_browes_threads', function () {
    $response = $this->get('/threads');
    $response->assertSee($this->thread->title);
});


test('can_view_single_thread', function () {
    $response = $this->get($this->thread->path());
    $response->assertSee($this->thread->title);
});


test('can_see_replies_thread_page', function () {
    $reply = Reply::factory()->create([
        'thread_id' => $this->thread->id
    ]);
    $response = $this->get($this->thread->path());
    $response->assertSee($reply->body);
});


test('a_user_can_filter_threads_according_to_a_tag',function(){
    $channel = create(Channel::class);
    $threadInChannel = create(Thread::class,['channel_id'=>$channel->id]);
    $threadNotInChannel = create(Thread::class);


    $this->get('/threads/'.$channel->slug)
    ->assertSee($threadInChannel->title)
    ->assertDontSee($threadNotInChannel->title);
});
