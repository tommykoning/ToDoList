@extends('layouts.skeleton')

@section('basic')
    <div class="btn-group" role="group">
        <a class="btn btn-primary" href="{{route('home.index')}}">home</a>
        <a class="btn btn-primary" href="{{route('account.index')}}">Account</a>
        <button class="btn btn-primary">FAQ</button>
        <button class="btn btn-primary">Help</button>
    </div>
    @yield('main')
@endsection