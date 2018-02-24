<?php

namespace Nyabingi\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Session;
use Nyabingi\User;
use Nyabingi\Profile;
use Nyabingi\Post;
use Nyabingi\Friendship;
use Nyabingi\Favourite;
use Nyabingi\Message;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class ProfilesController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**this is the function that leads to where the user views his profile */
    public function index($id)
    {
      $user = User::where('id',$id)->first();
      $posts = Post::where('user_id',$user->id)->get();
      $followers = Auth::user()->followers();
      $following = Auth::user()->following();
      $followers_ids = Auth::user()->followers_ids();
      $following_ids = Auth::user()->following_ids();

      $favourites = array();

      foreach($user->favs() as $fav):
        array_push($favourites, \Nyabingi\Post::find($fav));
      endforeach;
      $orders = Auth::user()->orders;
      $orders->transform(function($order,$key)
      {
        $order->cart = unserialize($order->cart);
        return $order;
      });
    
      $messages = Message::where('artist',$user->id)->get();
    
      return view('profiles.profile',[
          'user' => $user,
          'profile' => $user->profile,
          'posts' => $posts,
          'followers' => $followers,
          'followings' => $following,
          'following_ids' => $following_ids,
          'followers_ids' => $followers_ids,
          'favourites' => $favourites,
          'orders' => $orders,
          'messages' => $messages,
          ]);

    }

    public function view_user($id)
    {
      $user = User::where('id',$id)->first();
    //   $orders = Auth::user()->orders;
    //   $orders->transform(function($order,$key)
    //   {
    //     $order->cart = unserialize($order->cart);
    //     return $order;
    //   });
      // return view('profiles.profile')->with('user',$user);
      return view('profiles.profile',['user' => $user, 'orders' => $orders]);
    }

    /**leaads to edit your profile page */
    public function edit()
    {
      return view('profiles.edit')->with('profile',Auth::user()->profile);
    }


    /**this is where the user's profile details are stored to the database */
    public function update(Request $request)
    {

      $this->validate($request,[
        'biography' => 'max:255',
        // 'website' => 'url'
      ]);

      if(Auth::user()->profile()->update([
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,
        'phone_number' => $request->phone_number,
        'country' => $request->country,
        'city' => $request->city,
        'website' => $request->website,
        'fav_visual_artist' => $request->fav_visual_artist,
        'fav_books' => $request->fav_books,
        'fav_music' => $request->fav_music,
        'fav_movies' => $request->fav_movies,
        'biography' => $request->biography,
        'type_of_artist' => $request->type_of_artist,
        'area_of_specialty' => $request->area_of_specialty,
      ])){

        // Auth::user()->update([
        //   'first_name' => $request->first_name,
        //   'last_name' => $request->last_name,
        // ]);
        if($request->hasFile('avatar'))
        {
          $avatar = $request->file('avatar');

              // store the image
        $image = Storage::disk('public')->putFile('avatars', $avatar);

          Auth::user()->update([
            'avatar' => $image
          ]);
        }

        Session::flash('success','profile updated');
        return redirect()->back();
      }
      else
       {
        Session::flash('fail','error! profile not updated');
        return redirect()->back();
      }



    }

    public function myImages($id)
    {
      $myImages = Post::where('user_id',$id)->get();

      return $myImages;
    }

    public function viewImage($id)
    {
      $image = Post::where('id',$id)->get();
      return view('image',['image' => $image]);
    }

    public function avatar($id, Request $request){
      /* Fetch the artwork using the id */
      $image_path = 'public/avatars/'.$id;

      $image = Storage::get($image_path);

      /* Return the file */
      return Image::make($image)->response();

    }

    public function chat(Request $request)
    {
      $chat = Message::create([
        // 'profile_id',
        'message' => $request->message,
        'created_by' => Auth::id(),
        'artist' => $request->artist_id,
        // 'ip',
        // 'type',
        // 'status',
      ]);

      return redirect()->back();
    }
}
