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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<!--<head>-->
<!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
<!--</head>-->
<!--<div class="mb-3">-->
<!--  <label for="exampleFormControlInput1" class="form-label">Email address</label>-->
<!--  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">-->
<!--</div>-->
<!--<div class="mb-3">-->
<!--  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>-->
<!--  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>-->
<!--</div>-->
@endsection
