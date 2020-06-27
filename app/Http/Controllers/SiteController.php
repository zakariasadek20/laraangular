<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Service;
use App\Slide;
use App\Page;
use App\Message;
use App\Category;

class SiteController extends Controller
{
    //
    public function index(){
      $slides=Slide::orderBy('created_at','desc')->take(3)->get();
       $services=Service::take(3)->get();
       $posts=Post::orderBy('created_at','desc')->take(4)->get();
       return view('site.accueil',['slides'=>$slides,'services'=>$services,'posts'=>$posts]);
    }
    public function services(){
      $services=Service::all();
       return view('site.services',['services'=>$services]);
    }
    public function blog(){
      //$post=Post::all();

      $categories=Category::all();

      $post=Post::paginate(4);
       return view('site.blog',['posts'=>$post,'categories'=>$categories]);
    }
    public function about(){
      $page=Page::where('slug','propos')->first();
       return view('site.about',['page'=>$page]);
    }
    public function contact(){
       return view('site.contact');
    }
    public function show($slug){
     $post=Post::where('slug',$slug)->first();
      return view('site.show',['post'=>$post]);
    }
    public function service($slug){
      $service=Service::where('slug',$slug)->first();
      return view('site.service',['service'=>$service]);
    }
    //save noveau message
    public function storeContact(Request $request){
      // return $request->all();
      $data=$request->validate([
        'name'    =>'required',
        'email'   =>'required|email',
        'message' =>'required|min:5|max:380'
      ]);
      $message=new Message();
      // $message->name    =$request->get('name');
      // $message->email   =$request->get('email');
      // $message->message =$request->get('message');
      $message->name=$data['name'];
      $message->email=$data['email'];
      $message->message=$data['message'];
      $message->save();
      return redirect('/contact')->with('status',"Salut $message->name , votre demande sera traitée dans quelques instants.");
    }
    public function getPostsOfCategory($slug){
      //with id
      //$posts=Post::where('category_id',$id)->paginate(4);
      //with slug
      $category=Category::where('slug',$slug)->first();
      $posts=$category->posts()->paginate(4);
      $categories=Category::all();

       return view('site.blog',['posts'=>$posts,'categories'=>$categories]);
    }
}
