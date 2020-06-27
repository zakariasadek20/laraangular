<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Http\Resources\SlidersResource;
class SlidersController extends Controller
{
    //
    public function getAllSliders($limit=null){
    	if($limit!= null and $limit>0){
    		return SlidersResource::collection(Slide::take($limit)->get());
    	}
    	return SlidersResource::collection(Slide::all());
    }
    // public function getSlide($id){
    // 	return new SlidersResource(Slide::find($id));
    // }
}
