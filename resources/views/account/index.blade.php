@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('account.update', $user['id'])}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="username">new username:</label>
                                <input type="text" class="form-control" id="username" name="username" value="{{$user['name']}}">
                            </div>
                            <div class="form-group">
                                <label for="email">new Email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$user['email']}}">
                            </div>
                            <div class="form-group">
                                <label for="password">new password:</label>
                                <input type="text" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <button style="cursor:pointer" type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
