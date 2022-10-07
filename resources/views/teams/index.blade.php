@extends('layouts.master')

@section('title', 'Teams')  


@section('content')
  @foreach($teams as $team)
      <div class="row" >
          <div class="col-md-4"></div>
            <div class="card mb-4 box-shadow">
              <div class="card-body ">
              <a href="{{ route('single-team', [ 'id'=> $team->id]) }}" > {{$team->name}}</a>
                {{-- <div class="d-flex justify-content-between align-items-center">

                      <p class="card-text">{{$movie->story_line}}</p>
                  
                </div> --}}
              </div>
            </div>
          </div>
        </div>
  @endforeach
@endsection 