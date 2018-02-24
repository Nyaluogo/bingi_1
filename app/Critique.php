<?php

namespace Nyabingi;

use Illuminate\Database\Eloquent\Model;

class Critique extends Model
{
    //
    public $with = ['user'];

    protected $fillable = [
        
        'post_id',
        'critique',
        'critic',
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
