@extends('master')
@section("content")
<div class="container custom-login">
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <label for="email" class="form-control" id="exampleInputEmail1"></label>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Email address</label>
                <label for="password" class="form-control" id="exampleInputPassword"></label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </div>
</div>

@endsection