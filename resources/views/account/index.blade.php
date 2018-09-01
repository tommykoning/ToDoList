@extends('layouts.basic')
@section('main')
    {{--<form action="{{route('login')}}" method="post">--}}
        <div class="form-group">
            <label for="username">username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="text" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">login</button>
        </div>
    {{--</form>--}}
@endsection
