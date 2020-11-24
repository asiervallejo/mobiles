@extends('layouts.public')
@section('content')
  <header style="margin-top: -72px" id="inicio" class="masthead bg-primary text-white text-center">
    <div class="container">
	@isset($mobile)
		<img class="img-fluid mb-3 d-block mx-auto" style="height: 200px" src='{{$mobile->url_photo}}' alt="">
		<h1 class="mb-0">{{$mobile->name}}</h1>
      	<hr class="star-light">
      	<h2 class="font-weight-light mb-0">Valuation: {{$mobile->valuation}}/10</h2>
        <h2 class="font-weight-light mb-0">Number of Opinions: {{$mobile->range->name}}</h2>
  @endisset
   	    </div>
  </header>
@endsection