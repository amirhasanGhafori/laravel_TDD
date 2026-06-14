<?php

use App\Models\Channel;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;


beforeEach(function () {
    $this->thread = Thread::factory()->create();
});


test('a_thread_has_replies', function () {
    $this->assertInstanceOf(
        \Illuminate\Database\Eloquent\Collection::class,
        $this->thread->replies
    );
});


test('a_thread_has_a_creator', function () {
    $this->assertInstanceOf(User::class, $this->thread->creator);
});


test('a_thread_can_add_a_reply', function () {
    $user = User::factory()->create();
    $this->thread->addReply([
        'body' => 'Foodbar',
        'user_id' => $user->id
    ]);

    $this->assertCount(1, $this->thread->replies);
});


test('a_thread_can_make_a_string_path', function () {
    $thread = create(Thread::class);
    $this->assertEquals(
        '/threads/' . $thread->channel->slug . '/' . $thread->id,
        $thread->path()
    );
});


test('a_user_filter_thread_by_any_username',function(){
    $this->signIn(create(User::class,['name'=>'amirhasan']));

    $threadByAmirhasan = create(Thread::class,['user_id'=>auth()->id()]);
    $threadNotByAmirhasan = create(Thread::class);

    $this->get('/threads?by=amirhasan')->assertSee($threadByAmirhasan->title)->assertDontSee($threadNotByAmirhasan->title);
});
