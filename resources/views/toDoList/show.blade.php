@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><p>{{$list->name}}</p> <a class="btn btn-primary" href='{{route('todolist.destroy', $list->id)}}'>delete</a></div>
                    <div class="card-body">
                        <a class="btn btn-primary" href='{{route('task.create', $list->id)}}'>create</a>
                        @foreach($tasks as $task)
                            <a href="{{route('todolist.show',$task->id)}}">{{$task->name}}</a> <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection