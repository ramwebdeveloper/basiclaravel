<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
 public function submit(Request $request){
  	
  		$this->validate($request, [
  			'name'=>'required',
  			'email'=>'required',
  		]);
  		
  		$mesage = new Message;
  		$mesage->name = $request->input('name');
  		$mesage->email = $request->input('email');
  		$mesage->message = $request->input('message');
  		$mesage->save();
  		
  		return redirect('/')->with('success','Message Sent!');
  		
	}
	
	public function getMessages(){
		
		$messages  = Message::all();
		
		return view('messages')->with('messages',$messages);
		
	}
}
