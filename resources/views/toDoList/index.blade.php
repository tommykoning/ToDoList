@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><p>ToDoList</p> <a class="btn btn-primary" href='{{route('todolist.create')}}'>new</a></div>
                    <div class="card-body">{{$data}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection