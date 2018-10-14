@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>edit Task</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('task.update', ['list' =>$id, 'task' =>$task->id])}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$task['task_name']}}">
                            </div>
                            <div class="form-group">
                                <label for="status">status</label>
                                <select class="form-control" name="status" id="TaskStatusSelect">
                                    <option value="">ToDo</option>
                                    @foreach($statuses as $status)
                                        <option value="{{$status->id}}"
                                        @if($status['id'] == $task['status_id'])
                                            selected="selected"
                                        @endif
                                        >
                                            {{$status->status_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="beschrijving">beschrijving</label>
                                <input type="text" class="form-control" name="beschrijving" value="{{$task['description']}}">
                            </div>
                            <div class="form-group">
                                <input type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection