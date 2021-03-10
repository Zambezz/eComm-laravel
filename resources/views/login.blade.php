@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="login" method="POST">
            <div class="form-group">
                @csrf
                <label for="exampleInputEmail1">Email address</label>
                <input for="email" name="email" class="form-control" id="exampleInputEmail1"></input>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Email address</label>
                <input for="password" name = "password" class="form-control" id="exampleInputPassword"></input>
            </div>
            <button type="submit" class="btn btn-default">Login</button>
        </form>
    </div>
    </div>
</div>

@endsection