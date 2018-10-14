@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>{{$list->name}}</p>
                        <a href="{{route('todolist.index')}}" class="btn btn-secondary">back</a>
                        <a class="btn btn-primary" href='{{route('task.create', $list->id)}}'>create</a>
                        <button class="btn btn-primary" id="sort" data="0">sorteer</button>
                        <select class="form-control col-md-4" id="filt">
                            <option data="0">all</option>
                            @foreach($statuses as $status)
                                <option data="{{$status->id}}">{{$status->status_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-body">
                        @foreach($tasks as $task)
                            <div class="form-row task" data-sort="@if($task['status_id']) {{$task['status_id']}} @else 5 @endif">
                                <div class="col-5">
                                    <p class="form-control">{{$task->task_name}}</p>
                                </div>
                                <div class="col-auto">
                                    <p class="form-control">@if($task->status){{$task->status->status_name}} @else ToDo @endif</p>
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
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection