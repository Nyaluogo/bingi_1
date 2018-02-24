<?php

namespace Nyabingi;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $with = ['user'];

    protected $fillable = [
        
        'profile_id',
        'message',
        'created_by',
        'artist',
        'ip',
        'type',
        'status',
    ];

    public function post()
    {
        return $this->belongsTo('Nyabingi\Post');
    }

    public function user()
    {
        return $this->belongsTo('Nyabingi\User');
    }
}
