<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;
use App\Models\messageModel;

class contactController extends Controller
{
    public function submit(contactRequest $request)
    {
        $message = new messageModel();
        $message_id = messageModel::filler($message,$request);
        return redirect('home')->with('success','Message sent successfully!');
    }

    public function getMessages()
    {
        $messages = messageModel::all();
        return view('messages',compact('messages'));
    }
}
