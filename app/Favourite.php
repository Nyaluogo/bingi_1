<?php

namespace Nyabingi;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    //
    public $with = ['user'];

    protected $fillable = ['user_id','post_id'];

    public function post()
    {
        return $this->belongsTo('Nyabingi\Post');
    }

    public function user()
    {
        return $this->belongsTo('Nyabingi\User');
    }
}
