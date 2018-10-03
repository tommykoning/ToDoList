@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>ToDoList</p>
                        <a class="btn btn-primary" href='{{route('todolist.create')}}'>new</a>
                        <a class="btn btn-primary" href='{{route('overview')}}'>overview</a>
                    </div>
                    <div class="card-body">
                        @foreach($lists as $list)
                            <div class="form-row">
                                <div class="col-5">
                                    <a class="form-control" href="{{route('todolist.show', $list->id)}}">{{$list->name}}</a>
                                </div>
                                <div class="col-auto">
                                    <a href="{{route('todolist.edit', ['toDoList' =>$list->id])}}" class="btn btn-primary">edit</a>
                                </div>
                                <form action="{{route('todolist.destroy', $list->id)}}" method="post">
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