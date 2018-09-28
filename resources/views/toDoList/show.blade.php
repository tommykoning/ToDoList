@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>{{$list->name}}</p>
                    </div>
                        <div class="card-body">
                        <a class="btn btn-primary" href='{{route('task.create', $list->id)}}'>create</a> <br><br><br>
                        @foreach($tasks as $task)
                                <div class="form-row">
                                    <div class="col-5">
                                        <p class="form-control">{{$task->task_name}}</p>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{route('task.edit', ['list' =>$list->id, 'task' =>$task->id])}}" class="btn btn-primary">edit</a>
                                    </div>
                                    <form action="{{route('task.destroy', ['list' => $list->id, 'task' => $task->id])}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <div class="col-auto">
                                            <input type="submit" class="btn btn-primary" value="delete">
                                        </div>
                                    </form>
                                    </div>
                                </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection