<?php

namespace Nyabingi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nyabingi\Traits\Friendable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use Nyabingi\Mail\UserActivation;
use Nyabingi\Profile;
use Nyabingi\Favourite;
use Storage;
// use Overtrue\LaravelFollow\Traits\CanFollow;
// use Overtrue\LaravelFollow\Traits\CanBeFollowed;
// use Overtrue\LaravelFollow\Traits\CanLike;
// use Overtrue\LaravelFollow\Traits\CanFavorite;
// use Overtrue\LaravelFollow\Traits\CanSubscribe;
use Auth;

class User extends  Authenticatable
{
    use Notifiable;
    use Friendable;
    // use CanFollow, CanBeFollowed,CanLike, CanFavorite, CanSubscribe;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'slug',
        'avatar',
        'provider',
        'provider_id',
        'user_level',
        'account_status',
        'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

      /*Return true if user is verified and return a boolean*/
      public function verified()
      {
        return $this->token === null;
      }


    // accessor ofr avatar
    public function getAvatarAttribute($avatar)
    {
        return asset(Storage::url($avatar));
    }
  
      /*Send the user a verification email and return void*/
      public function sendVerificationEmail()
      {
          Mail::to($this->email)
            ->queue(new UserActivation($this->token));
      }

    public function addNew($input)
    {
        $check = static::where('provider_id',$input['provider_id'])->first();


        if(is_null($check)){
            return static::create($input);
        }


        return $check;
    }

    public function posts()
    {
        return $this->hasMany('Nyabingi\Post');
    }

    public function orders()
    {
        return $this->hasMany('Nyabingi\Order');
    }

    // profile relationship
    public function profile()
    {
      return $this->hasOne('Nyabingi\Profile');
    }

    //A user can have many favourites
    public function favourites()
    {
        return $this->hasMany('Nyabingi\Favourite');
    }

    public function favs()
    {
        return collect(Favourite::where('user_id',$this->id)->get())->pluck('post_id')->toArray();
    }

    public function thread()
    {
        $messages = Message::where('artist',$this->id)->get();
        $thread = array();

        foreach($messages as $message):
            array_push($thread, $message);
        endforeach;

        //  usort($thread, function($p1,$p2)
        // {
        //     return $p1->id < $p2->id;
        // });

        return $thread;
    }

    public function getAllUsers()
    {
        $users = User::all();
        return $users;
    }

    public function getAllUploads()
    {
        $uploads = Post::all();
        return $uploads;
    }
}
