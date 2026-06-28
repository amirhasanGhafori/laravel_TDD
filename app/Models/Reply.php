<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function favorites()
    {
        return $this->morphMany(Favorite::class,'favorited');
    }

    public function favorite(){
        if(! $this->favorites()->where('user_id',auth()->id())->exists()){

            $this->favorites()->create(['user_id'=>auth()->id()]);
        }
    }
}
