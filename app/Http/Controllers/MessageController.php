<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\MessageStored;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Message = new Message;
        $Message->message =  $request->massage;
        $Message->user_id =  $request->user()->id;
        $Message->save();
        broadcast(new MessageStored($Message));
        return $Message;
//        return back()->with('message','Message send succesfully');
    }

}
