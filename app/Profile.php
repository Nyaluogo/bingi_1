<?php

namespace Nyabingi;

use Illuminate\Database\Eloquent\Model;
use Nyabingi\User;

class Profile extends Model
{
    
    protected $fillable = [
        'phone_number',
        'user_id', 
        'city',
        'country',
        'website',
        'DOB',
        'reason_for_joining',
        'fav_visual_artist',
        'fav_music',
        'fav_books',
        'fav_movies',
        'biography',
        'type_of_artist',
        'area_of_specialty',
        'first_name',
        'last_name',
        'gender',
        'ip_address',
        'device',
        
        'address_1',
        'address_2',
        'region',
        'postal_code',

    ];
  
      public function user()
      {
        return $this->belongsTo('Nyabingi/User');
      }
}
