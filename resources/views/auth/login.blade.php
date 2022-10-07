@extends('layouts.master')

@section('title', 'Login')

@section('content')
    <form method="POST" action="/login">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="email" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>

        @error('message')
        @include('partials.error')

        @enderror
    </form>
    @endsection