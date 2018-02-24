<?php

namespace Nyabingi\Http\Controllers;

use Illuminate\Http\Request;
use Nyabingi\User;
use Nyabingi\Post;
use Auth;

class FriendshipsController extends Controller
{
    //
    public function check($id)
    {
    

      if(Auth::user()->is_following($id) === 1)
      {
        return ["status" => "following"];
      }

      if(Auth::user()->is_following_you($id) === 1)
      {
        return ["status" => "following_you"];
      }

      return ["status" => 0];
    }



    public function explore()
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

    public function follow($id)
    {
      //sending notifications,emails,broadcasting
      $resp =  Auth::user()->follow($id);

      // User::find($id)->notify(new \Black_Magik\Notifications\NewFriendRequest(Auth::user()));

    //   return $resp;
      return redirect()->back();
    }

    public function unfollow($id)
    {
      //sending notifications,emails,broadcasting
      $resp =  Auth::user()->unfollow($id);

    //   return $resp;
      return redirect()->back();
    }
}
