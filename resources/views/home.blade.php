@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                            <p>welcome log in to continue</p>
                        @else
                            <p>welcome go to ToDoList to continue</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
