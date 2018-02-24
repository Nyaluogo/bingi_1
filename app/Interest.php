<?php

namespace Nyabingi;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
        'user_id',
        'discover',
        'improve_skills',
        'promote_work',
        'sell_art',
        'buy_art',
        'other',
        ];
    
        public function user()
        {
          return $this->belongsTo('Nyabingi/User');
        }
}
