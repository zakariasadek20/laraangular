
	@extends('master')

	@section('content')


	<section class="hero is-dark">
	  <div class="hero-body">
	    <div class="container">
	    	<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="{{url('/')}}" style="color: white">Accueil</a></li>
			    <li><a href="{{url('/blog')}}" >Blog</a></li>
			    <li class="is-active"><a href="#" aria-current="page" style="color: white">{{$post->title}}</a></li>
			  </ul>
			</nav>
	      <h1 class="title">
	        {{$post->title}}
	      </h1>
	      	<h4 class="subtitle">
	      		{{$post->excerpt}}
	      	</h4>
	    </div>
	  </div>
	</section>

	<div class="container">
		<div class="columns">
			<div class="column is-marginless">
			<figure class="image is-4by3">
				<img src="{{asset('/storage/'.$post->image)}}">
			</figure>
				<p>
					{!! $post->body !!}
				</p>
			</div>
		</div>
	</div>


	@endsection