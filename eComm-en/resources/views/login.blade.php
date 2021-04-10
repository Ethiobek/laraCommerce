@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="form-group">
                    <label for="emailinput">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" id="emailinput">
                </div>
                <div class="form-group">
                    <label for="userpassword">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password" id="userpassword">
                </div>
                <button class="btn btn-default" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>

@endsection