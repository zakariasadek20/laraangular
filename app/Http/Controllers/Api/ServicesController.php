<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServicesResource;
use App\Service;
class ServicesController extends Controller
{
    //
    public function getAllServices($limit=null){
    	if($limit !=null and $limit>0){
    		return ServicesResource::collection(Service::take($limit)->get()) ;
    	}
    	return ServicesResource::collection(Service::all());
    }
    public function getService($slug){
    	return new ServicesResource(Service::where('slug',$slug)->first());
    }
}
