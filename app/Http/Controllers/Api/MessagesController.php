<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
class MessagesController extends Controller
{
    //
    public function getAllMessages($limit=null){
    	if($limit!= null and $limit>0){
    		return SlidersResource::collection(Message::take($limit)->get());
    	}
    	return SlidersResource::collection(Message::all());
    }
    public function getMessage($id){
    	return new SlidersResource(Message::find($id));
    }
}
