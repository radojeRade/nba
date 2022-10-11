@extends('layouts.master')

@section('content')
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="https://lajoyalink.com/wp-content/uploads/2018/03/Movie.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$news->title}}</h5>
      <p class="card-text">{{$news->content}}</p>
    
      <a href="/news/{{$news->user->id}}" > {{$news->user->name}}</a>   
    </div>
  </div>
@endsection