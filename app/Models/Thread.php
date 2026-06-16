<?php

namespace App\Models;

use App\filters\ThreadFilters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;

class Thread extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    protected static function boot(){
        parent::boot();
        static::addGlobalScope('replyCount',function ($builder) {
            $builder->withCount('replies');
        });
    }
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    public function channel(){
        return $this->belongsTo(Channel::class);
    }


    public function path(){
        return '/threads/'.$this->channel->slug.'/'.$this->id;
    }

    public function addReply($reply){
        $this->replies()->create($reply);
    }

    public function scopeFilter($query,ThreadFilters $filters){
        return $filters->apply($query);
    }
}
