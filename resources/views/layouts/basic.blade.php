@extends('layouts.skeleton')

@section('skeleton')
    <div class="btn-group" role="group">
        <button class="btn btn-primary">Account</button>
        <button class="btn btn-primary">FAQ</button>
        <button class="btn btn-primary">Help</button>
    </div>
    @yield('basic')
@endsection