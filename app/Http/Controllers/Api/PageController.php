<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Http\Resources\PageResource;
class PageController extends Controller
{
    //
    public function getPage($slug){
    	$page=Page::where('slug',$slug)->first();
    	return new PageResource($page) ;
    }
}
