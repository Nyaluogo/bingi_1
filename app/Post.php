<?php

namespace Nyabingi;

use Illuminate\Database\Eloquent\Model;
use Storage;
use Nyabingi\Favourite;
use Nyabingi\Critique;
// use Overtrue\LaravelFollow\Traits\CanBeLiked;
// use Overtrue\LaravelFollow\Traits\CanBeFavorited;

class Post extends Model
{
    // use CanBeLiked, CanBeFavorited;

    // public $with = ['user','likes','comment'];
    public $with = ['user','favourites'];
    protected $fillable = [
        'content',
        'user_id',
        'path',
        'thumb',
        'image_extension',
        'image_name',
        'is_active',
        'is_featured',
        'mobile_image_name',
        'mobile_image_path',
        'mobile_extension',
        'title',
        'description',
        'price',
        'print_options',
        'number_of_prints_for_sale',
        'type_of_print',
        'year_of_completion',
        'category',
        'tags',
       
        'medium',
        'material',
        'height',
        'lenght',
        'width',
        'mature_content_type',
        'comment_options',
        'sharing_options',
        'download_options',
        'watermark_options',
        'display_options',
        'critique_options'
        ];

    public function user()
    {
        return $this->belongsto('Nyabingi\User');
    }

    public function favourites()
    {
        return $this->hasMany('Nyabingi\Favourite');
    }

    public function critiques()
    {
        return $this->hasMany('Nyabingi\Critique');
    }

    public function thread()
    {
        $critiques = Critique::where('post_id',$this->id)->get();
        $thread = array();

        foreach($critiques as $critique):
            array_push($thread, $critique);
        endforeach;

         usort($thread, function($p1,$p2)
        {
            return $p1->id < $p2->id;
        });

        return $thread;
    }

    public function favouriters()
    {
        // $favouriters = Favourite::where('post_id',$this->id)->get();
        return collect(Favourite::where('post_id',$this->id)->get())->pluck('user_id')->toArray();
    }

    // public function comment()
    // {
    //     return $this->hasMany('Nyabingi\Comment');
    // }

    public function getPathAttribute($value)
    {

        return asset(Storage::url($value));

    }

    public function getThumbAttribute($value)
    {
      
        return asset(Storage::url($value));

    }
}
