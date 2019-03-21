@extends('layouts.app')

@section('content')


<h1>REVIEWS</h1>



@foreach ($reviews as $review)
<div class="card">
  <div class="card-header">
  <h5>User:  {{$review->author}}</h5>
  </div>
  <div class="card-body">
    <p class="card-text"> <p> {{$review->content}}</p>
  </div>
</div>
@endforeach

<a href="/movie/{{$movie->id}}"><button>Go back</button></a>



   @endsection




