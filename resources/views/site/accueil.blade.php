
	@extends('master')

	


	@section('content')
	@foreach($slides as $slide)
	  <div class="mySlides w3-display-container w3-center">
    	 <img src="{{asset('/storage/'.$slide->image)}}" style="width:100%; height: 600px" />
   		 <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      		 <h3>{{$slide->title}}</h3>
      	 	<p><b>{{$slide->description}}</b></p>   
    	</div>
 	 </div>
 	 @endforeach
 	 <br>
 	 <br>
 	 <br>
  	
  	<div class="container">
  		<div class="is-divider" data-content="Nos service"></div>

  		<div class="columns is-marginless">

  				@foreach ($services as $service)
					
				
			<div class="column">
				<div class="card">
					  <div class="card-image">
					    <figure class="image is-16by9">
					    	<a href="{{url('/services/'.$service->slug)}}">
					      <img src="{{asset('/storage/'.$service->image)}}" alt="Placeholder image" >
					      </a>
					    </figure>
					  </div>
					  <div class="card-content">
					    <div class="media">
					     
					      <div class="media-content">
						  <p class="title is-5">{{ $service->title }}</p>
					      <button class="button is-warning">Voire plus</button>
					      </div>
					    </div>

					  </div>
				</div>
			</div>
				@endforeach
  			
  		</div>
  		

  	</div>
  	<div class="is-divider" data-content="Nos Actualités"></div>
  	<section class="hero is-warning">
  		<div class="hero-body">
  			<div class="container">
  				


  			@foreach($posts->chunk(2) as $chunk)

			<div class="columns is-marginless">

				@foreach ($chunk as $post)
					
				
			<div class="column">
				<div class="card">
					  <div class="card-image">
					    <figure class="image is-16by9">
					    	<a href="{{url('/blog/'.$post->slug)}}">
					      <img src="{{asset('/storage/'.$post->image)}}" alt="Placeholder image" >
					      </a>
					    </figure>
					  </div>
					  <div class="card-content">
					    <div class="media">
					     
					      <div class="media-content">
						  <p class="title is-4">{{ $post->title }}</p>
					      </div>
					    </div>

					    <div class="content">
							{{str_limit($post->excerpt,80)}}
					      <br>
						<time datetime="">{{Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</time>
					    </div>
					  </div>
				</div>
			</div>
				@endforeach
			</div>
			@endforeach

  			</div>
  		</div>
  		
  	</section>



  <script >
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}
  </script>


	@endsection


	@section('stylesheets')
	<!-- <link rel="stylesheet"
	 href="{{asset('css/bulma-carousel.min.css')}}"> -->
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link rel="stylesheet" href="{{asset('css/bulma-divider.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	@endsection

	@section('javascripts')
	<script 
	 src="{{asset('js/bulma-carousel.min.js')}}"></script>
	@endsection

