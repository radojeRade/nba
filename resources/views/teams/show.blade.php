@extends('layouts.master')

@section('content')


  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="https://lajoyalink.com/wp-content/uploads/2018/03/Movie.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$team->name}}</h5>
      <p class="card-text">{{$team->email}}</p>
      <p>{{$team->address}}</p>
      <p class="card-text">{{$team->city}}</p> 
      <div>
        <h4>Players:</h4>
        <ul>
          @foreach($team->players as $player)
            <li>         
              <a href="{{ route('single-player', ['id' => $player->id]) }}" > {{ $player->first_name}} {{$player->last_name }}</a>      
            </li>
          @endforeach
        </ul>        
      </div>  
    </div>
  </div>
  <div>
    <h4>Comments:</h4>
    <ul>
      @foreach($team->comments as $comment)
        <li>
          {{ $comment->content }} {{ $comment->user->name }}
        </li>
      @endforeach
    </ul>
  </div>
  <div>
    <form method="POST" action="/teams/{{ $team->id }}/comments">
      @csrf
    <div class="mb-3">
      <label class="form-label">Leave a comment</label>
      <input type="text" name="content" rows="2" class="form-control">
    </div>
    @error('content')
    @include('partials.error')
    @enderror
    <button type="submit" class="btn btn-primary">submit</button>
    </form>
  </div>
  
@endsection