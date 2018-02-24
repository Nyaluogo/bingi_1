<?php

namespace Nyabingi\Http\Controllers;

use Illuminate\Http\Request;
use Nyabingi\User;
use Nyabingi\Post;
use Nyabingi\Favourite;
use Nyabingi\Comment;
use Auth;

class FeedsController extends Controller
{
    public function feed()
    {
        $followers = Auth::user()->following();

        $feed = array();

        foreach($followers as $follower):

            foreach($follower->posts as $post):

                array_push($feed, $post);

            endforeach;

        endforeach;

        foreach(Auth::user()->posts as $post):
            array_push($feed, $post);
        endforeach;

        usort($feed, function($p1,$p2)
        {
            return $p1->id < $p2->id;
        });

        $favourites = Favourite::all();

        // return $feed;
        return view('home',[
            'feed' => $feed,
            'favourites' => $favourites,
        ]);
    }

     public function get_strangers()
    {

      $strangers = Auth::user()->strangers();
      $explore = array();

      foreach($strangers as $stranger):

        foreach($stranger->posts as $post):

          array_push($explore,$post);

        endforeach;

      endforeach;

      return $explore;
    }

    /*this is for he explore tab*/
    public function getIndex()
    {
        $data = $this->get_strangers();
        $strangers = Auth::user()->strangers();
        $followers = Auth::user()->followers();
        $following = Auth::user()->following();
        $followers_ids = Auth::user()->followers_ids();
        $following_ids = Auth::user()->following_ids();

        return view('followship.explore',[
            'posts' => $data,
            'strangers' => $strangers,
            'followers' => $followers,
            'followings' => $following,
            'following_ids' => $following_ids,
            'followers_ids' => $followers_ids,
        ]);
    }
}
