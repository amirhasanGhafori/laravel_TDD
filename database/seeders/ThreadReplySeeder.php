<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThreadReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->create();

        Thread::factory(30)
            ->create()
            ->each(function ($thread) {
                Reply::factory(5)->create([
                    'thread_id' => $thread->id,
                ]);
            });
    }
}
