@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <h2>Login</h2>
        <div class="col-sm-4 offset-4"style="margin-top: 40px;margin-bottom: 20px; height: 400px">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
