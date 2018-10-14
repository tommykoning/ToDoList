@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>create task for {{$todolist['name']}}</p>
                        <a href="{{route('todolist.show', $id)}}" class="btn btn-secondary">back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('task.store', $id)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="status">status</label>
                                <select class="form-control" name="status" id="TaskStatusSelect">
                                    <option value="">ToDo</option>
                                    @foreach($statuses as $status)
                                        <option value="{{$status->id}}">{{$status->status_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="beschrijving">beschrijving</label>
                                <input type="text" class="form-control" name="beschrijving">
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
@section('script')

@endsection