@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <p>Admin</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.update', 'update')}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            @foreach($users as $user)
                                <div class="form-row">
                                    <p class="form-control col-5">{{$user['name']}}</p>
                                    <select class="form-control col-3" name="status" id="TaskStatusSelect">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}"
                                                @if($role['id'] == $user['role_id'])
                                                selected="selected"
                                                @endif
                                            >
                                                {{$role->role_name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endforeach
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection