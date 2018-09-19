@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><p>ToDoList</p> <button class="btn btn-primary" onclick="window.location.href='{{route('todolist.create')}}'">new</button></div>
                    <div class="card-body">{{$data}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection