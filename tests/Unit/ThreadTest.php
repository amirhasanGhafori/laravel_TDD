<?php

use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;


beforeEach(function(){
    $this->thread = Thread::factory()->create();
});


test('a_thread_has_replies', function () {
    $this->assertInstanceOf(
        \Illuminate\Database\Eloquent\Collection::class,
        $this->thread->replies
    );
});


test('a_thread_has_a_creator',function(){
    $this->assertInstanceOf(User::class,$this->thread->creator);
});


test('a_thread_can_add_a_reply',function(){
    $user = User::factory()->create();
    $this->thread->addReply([
        'body'=>'Foodbar',
        'user_id'=>$user->id
    ]);

    $this->assertCount(1,$this->thread->replies);
});