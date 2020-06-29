
	@extends('master')

	@section('content')


	<section class="hero is-dark">
	  <div class="hero-body">
	    <div class="container">
	    	<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="{{url('/')}}" style="color: white">Accueil</a></li>
			    <li><a href="{{url('/services')}}" >Nos Services</a></li>
			    <li class="is-active"><a href="#" aria-current="page" style="color: white">{{$service->title}}</a></li>
			  </ul>
			</nav>
	      <h1 class="title">
	        {{$service->title}}
	      </h1>
	      	<h4 class="subtitle">
	      		{{$service->description}}
	      	</h4>
	    </div>
	  </div>
	</section>

	<div class="container">
		<div class="columns">
			<div class="column is-marginless">
			<figure class="image is-4by3">
				<img src="{{secure_asset('/storage/'.$service->image)}}">
			</figure>
				<p>
					{!! $service->body !!}
				</p>
			</div>
		</div>
	</div>


	@endsection