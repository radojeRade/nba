@extends('layouts.master')

@section('title', 'Create news')

@section('content')
    <form method="POST" action="/news">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Content</label>
            <input type="text" name="content" rows="5" class="form-control">
        </div>

        <h4>
            @foreach($teams as $team)
                
            <div class="form-group form-check">
                <input type="checkbox" 
                value= "{{ $team->id }}" 
                name ="teams[]"
                class="form-check-input"
                id="team_{{$team->id}}"
                >
                <label for="team_{{$team->id}}" class="form-check-label">{{$team->name}}</label>
            </div>
            @endforeach
        </h4>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection