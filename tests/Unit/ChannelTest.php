
<?php

use App\Models\Channel;
use App\Models\Thread;

test('a_channel_consists_of_threads',function(){

    $channel = create(Channel::class);
    $thread = create(Thread::class,['channel_id'=>$channel->id]);
    $this->assertTrue($channel->threads->contains($thread));

    
});