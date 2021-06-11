<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewMessageSent;

// use\App\Models\User;
// use\App\Models\Message;
// use Redirect, Storage, Auth;

class ChatController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    
   {

        $this->request= $request;
   }
   public function index()
   {
        return view('chat');
   }

   public function send()
   {
        event(
            new NewMessageSent(
                $this->request->message
            )
        );
        return back();
   }
 
}
