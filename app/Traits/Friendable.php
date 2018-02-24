<?php
  namespace Nyabingi\Traits;
  use Nyabingi\Friendship;
  use Nyabingi\User;
  use DB;

  trait Friendable
  {

   

    

    

    /*So the rules are that if only one guy is doing the following then the status is 1,
    he is the requester, the other dude is the user requested.
    and if I am following a dude that is already following me then he is the requester, Iam the user requested, the status will be 2 */
    public function follow($user_requested_id)
    {
      //so you dont add yourself as a friend.. loner:-)
      if($this->id === $user_requested_id)
      {
        return 0;
      }
      /* if we are not both following each other, create the new connection*/
      if($this->is_following($user_requested_id) === 0)
      {
        if($this->is_following_you($user_requested_id) === 0)
        {

          $friendship = Friendship::create([
            'requester' => $this->id,
            'user_requested' => $user_requested_id,
            'status' => 1
          ]);
         //  return response()->json($friendship, 200);
         return 1;
         /*the other guy is following me but am not following back..yet*/
        }elseif ($this->is_following_you($user_requested_id) === 1) {
          $friendship = Friendship::where('status',1)->where('requester',$user_requested_id)->where('user_requested',$this->id)->first();

          if($friendship)
          {
            $friendship->update([
              'status' => 2
            ]);
           //  return response()->json($friendship, 200);
           return 1;
          }
        }

      }elseif ($this->is_following($user_requested_id) === 1) {
        return "you are already following this guy";
      }

    }

    public function unfollow($user_requested_id)
    {

      //so you dont unfollow yourself as a friend.. loner:-)
      if($this->id === $user_requested_id)
      {
        return 0;
      }

      /*Get the connections from the database*/

      /*Here the other guy followed me*/
      $friendship1 = Friendship::where('requester',$user_requested_id)->where('user_requested',$this->id)->first();

      /*Here I followed the guy*/
      $friendship2 = Friendship::where('requester',$this->id)
      ->where('user_requested',$user_requested_id)
      ->first();

      /*Here the rules are such that if we are both following each other then
      the status should be 2.
      so in order to unfollow this dude, we need to set the status to 1,
       set the requester to the other user and user requested to me
       and vice versa*/
      if($this->is_following($user_requested_id) === 1)
      {
        if($this->is_following_you($user_requested_id) === 1)
        {
          if($friendship1)
          {
            $friendship1->update([
              'requester' => $user_requested_id,
              'user_requested' => $this->id,
              'status' => 1
            ]);
           //  return response()->json($friendship, 200);
           return 1;

         }elseif($frienship2)
         {
           $friendship2->update([
             'requester' => $user_requested_id,
             'user_requested' => $this->id,
             'status' => 1
           ]);
           return 1;
         }
        }elseif ($this->is_following_you($user_requested_id) === 0) {
          /*If am following him but he's not following back.. remove the connection*/
          if($friendship2)
          {
            $friendship2->delete();

            //  return response()->json($friendship, 200);
            return 1;
          }

        }

      }elseif ($this->is_following($user_requested_id) === 0) {
        return "you are not following this guy";
      }

      return 0;
     //  return response()->json('fail',501);
    }

    /*This is a function to get the guys that am following*/
    public function following()
    {
      $following = array();
      /*Connections where I followed the other guys and they followed back*/
      $f1 = Friendship::where('status',2)->where('requester',$this->id)->get();

      foreach($f1 as $followship):
        array_push($following, \Nyabingi\User::find($followship->user_requested));
      endforeach;

      /*Connectins where I followed the other guys but they did not follow back..yet :-(*/
      $f2 = Friendship::where('status',1)->where('requester',$this->id)->get();

      foreach($f2 as $followship):
        array_push($following, \Nyabingi\User::find($followship->user_requested));
      endforeach;

      /*Connectins where the other guys followed me and I followed right back(*/
      $f3 = Friendship::where('status',2)->where('user_requested',$this->id)->get();

      foreach($f3 as $followship):
        array_push($following, \Nyabingi\User::find($followship->requester));
      endforeach;


      return $following;
    }

    /*Function for getting my followers*/
    public function followers()
    {
      $followers = array();

      /*Here is a connection whereby somebody followed me and I followed right back*/
      $f1 = Friendship::where('status',2)->where('user_requested',$this->id)->get();

      foreach($f1 as $fellowship):
        array_push($followers, \Nyabingi\User::find($fellowship->requester));
      endforeach;

      /*Here is a connection wherby somebody followed me but I have not folled the back*/
      $f2 = Friendship::where('status',1)->where('user_requested',$this->id)->get();

      foreach($f2 as $fellowship):
        array_push($followers, \Nyabingi\User::find($fellowship->requester));
      endforeach;

      return $followers;
    }

    /*Function to get the ids of the followers*/
    public function followers_ids()
    {
      return collect($this->followers())->pluck('id')->toArray();
    }

    /*Function to get the ids of the guys am following*/
    public function following_ids()
    {
      return collect($this->following())->pluck('id')->toArray();
    }

    /*Function to check if am following the user id*/
    public function is_following($user_id)
    {
      if(in_array($user_id,$this->following_ids()))
      {
        // return response()->json('true',200);
        return 1;
      }
      else
      {
        // return response()->json('false',200);
        return 0;
      }
    }

    /*Function to check if the user is following me*/
    public function is_following_you($user_id)
    {
      if(in_array($user_id,$this->followers_ids()))
      {
        // return response()->json('true',200);
        return 1;
      }
      else
      {
        // return response()->json('false',200);
        return 0;
      }
    }

    public function strangers()
    {
      // $stranger = array();

      // $users = \Nyabingi\User::all();

      // $requesters = Friendship::pluck('requester');
      // $requested = DB::table('friendships')->pluck('user_requested');

      // $strangers = \Nyabingi\User::whereNotIn('id',$requesters)->whereNotIn('id',$requested)->get();

      // foreach($strangers as $strange):
      //   array_push($stranger, \Nyabingi\User::find($strange->id));
      // endforeach;

      // return $stranger;



      $stranger = array();

      $users = \Nyabingi\User::all();

      $requesters = Friendship::where('user_requested',$this->id)->pluck('requester')->toArray();
      $requested = Friendship::where('requester',$this->id)->pluck('user_requested')->toArray();

      $strangers = \Nyabingi\User::where('id','!=',$this->id)->where('id','!=',$this->id)->whereNotIn('id',$requesters)->whereNotIn('id',$requested)->get();



      foreach($strangers as $strange):
        array_push($stranger, \Nyabingi\User::find($strange->id));
      endforeach;

      return $stranger;
    }

   

  



  }
