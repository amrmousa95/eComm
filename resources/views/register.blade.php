@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 offset-4"style="margin-top: 70px;margin-bottom: 20px; height: 400px">
                <h2>Register</h2>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">user name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection

