@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>ToDoList</p>
                        <a class="btn btn-primary" href='{{route('todolist.create')}}'>new</a>
                        <a class="btn btn-secondary" href='{{route('todolist.index')}}'>back</a>
                    </div>
                    <div class="card-body" style="overflow: scroll;">
                        <div class="card-group">
                            @foreach($lists as $list)
                                <div class="card col-5">
                                    <div class="card-header col-auto">
                                        <a href="{{route('todolist.show', $list['id'])}}">{{$list['name']}}</a>
                                    </div>
                                    <div class="card-body">
                                        @foreach($list->Tasks as $task)
                                            <p>{{ $task->task_name }}</p>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection