<?php

namespace Nyabingi\Http\Controllers;

use Illuminate\Http\Request;
use Nyabingi\Post;
use Auth;
use Nyabingi\Favourite;

class FavouritesController extends Controller
{
    public function favourite($id)
    {
        $post = Post::find($id);

        $like = Favourite::create([
            'user_id' => Auth::id(),
            'post_id' => $post->id
        ]);

        // return Favourite::find($like->id);
        return redirect()->back();
    }

    public function unfavourite($id)
    {
        $post = Post::find($id);

        $like = Favourite::where('user_id', Auth::id())
                ->where('post_id',$post->id)
                ->first();
        $like->delete();

        // return $like->id;
        return redirect()->back();
    }

    public function getFavourites($id)
    {
        $post = Post::find($id);
        $likes = Favourite::where('post_id',$post->id)->get();

        return $likes->count();
    }
}
