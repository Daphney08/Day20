<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat()
        {
            $data = Message::select('messages.*', 'users.avatar', 'users.name')
            ->join('users', 'users.id', 'messages.user_id')
            ->orderBy('messages.created_at','DESC')
            ->get();

            return view('chat')->with([
                'data' => $data
        ]);

        }

        public function chat_send()
        {
            $this->request->merge([
                'user_id' => Auth::user()->id
            ]);

            Message::create(
                $this->request->except('_token')
            );
            return Redirect::route('app.chat');
        }
}
