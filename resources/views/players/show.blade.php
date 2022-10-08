@extends('layouts.master')

@section('content')
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="https://lajoyalink.com/wp-content/uploads/2018/03/Movie.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$player->first_name}} {{$player->last_name}}</h5>
      <p class="card-text">{{$player->email}}</p>
    
      <a href="/teams/{{$player->team->id}}" > {{$player->team->name}}</a>   
    </div>
  </div>
@endsection