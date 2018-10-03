@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>create ToDoList</p>
                        <a href="{{route('todolist.index')}}" class="btn btn-secondary">back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('todolist.update', [ 'id' => $toDoList['id']])}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{$toDoList['name']}}">
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