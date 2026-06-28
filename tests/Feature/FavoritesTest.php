<?php

use App\Models\Reply;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('cuests_can_not_favorite_anything', function () {
    $this->withoutMiddleware(ValidateCsrfToken::class);

    $this->post('replies/1/favorites')->assertRedirect('/login');
});


test('an_authenticated_user_can_favorite_any_reply', function () {

    $this->withoutExceptionHandling();
    $this->withoutMiddleware(ValidateCsrfToken::class);

    $this->signIn();

    $reply = create(Reply::class);

    $this->post('replies/' . $reply->id . '/' . 'favorites');
    $this->assertCount(1, $reply->favorites);
});



test('an_authenticated_user_may_only_favorite_a_reply_once', function () {
    $this->withoutExceptionHandling();

    $this->withoutMiddleware(ValidateCsrfToken::class);

    $this->signIn();

    $reply = create(Reply::class);

    try {
        $this->post('replies/' . $reply->id . '/' . 'favorites');
        $this->post('replies/' . $reply->id . '/' . 'favorites');

    } catch (\Throwable $th) {
        $this->fail($th);
    }

    $this->assertCount(1, $reply->favorites);
});
