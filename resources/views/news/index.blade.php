@extends('layouts.master')

@section('title', 'News')  


@section('content')
  @foreach($news as $new)
    <div class="row" >
      <div class="col-md-4"></div>
        <div class="card mb-4 box-shadow">
          <div class="card-body ">
            <a href="{{ route('single-news', [ 'id'=> $new->id]) }}" > {{$new->title}}</a> <span> {{$new->user->name}}</span>    
          </div>
        </div>
      </div>
    </div>
  @endforeach
  <div>{{ $news->links() }}</div>
@endsection 