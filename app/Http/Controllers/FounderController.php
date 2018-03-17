<?php

namespace Nyabingi\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Message;
use App\Order;
use App\Friendship;

class FounderController extends Controller
{
    //
    public function index()
    {
        return view('founder.index');
    }
}
