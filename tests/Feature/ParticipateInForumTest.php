<?php

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;



test('an_unAuthenticated_user_can_not_create_replies', function () {
    // $user = User::factory()->create();
    // $this->actingAs($user);
    $thread = Thread::factory()->create();
    $reply = Reply::factory()->make();
    $this->post($thread->path() . '/replies', $reply->toArray())
        ->assertRedirect('/login');
});


test('an_authenticated_user_may_participate_in_forum_threads', function () {

    $this->withoutExceptionHandling();

    $this->actingAs($user = User::factory()->create());

    $thread = create(Thread::class);

    $reply = make(Reply::class);

    $this->post($thread->path() . '/replies', [
        'body' => $reply->body
    ])->assertRedirect($thread->path());

    $this->assertDatabaseHas('replies', [
        'body' => $reply->body,
        'thread_id' => $thread->id,
        'user_id' => $user->id
    ]);

    $this->get($thread->path())
        ->assertSee($reply->body);
});
