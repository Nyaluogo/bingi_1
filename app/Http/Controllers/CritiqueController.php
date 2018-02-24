<?php

namespace Nyabingi\Http\Controllers;

use Illuminate\Http\Request;
use Nyabingi\Post;
use Nyabingi\User;
use Nyabingi\Critique;
use Nyabingi\Friendship;
use Session;

use Auth;

class CritiqueController extends Controller
{
    //
    public function critique(Request $request)
    {
        $post = Post::find($request->post_id);

        $critique = Critique::create([
            'critic' => Auth::id(),
            'post_id' => $post->id,
            'critique' => $request->critique,
            'ip' => $this->get_client_ip(),
        ]);

        if($critique)
        {
            Session::flash('success','Critique sent successfully');
            return redirect()->back();
        }else{
            Session::flash('fail','☹Oops!.. an error occured, please try again');
            return redirect()->back();
        }
    }

    // public function hide_comment($id)
    // {
    //     $post = Post::find($id);

    //     Comment::where('user_id',Auth::id())
    //             ->where('post_id',$post->id)
    //             ->first()
    //             ->delete();

    //         return 1;
    // }

    // Function to get the client IP address
    function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
