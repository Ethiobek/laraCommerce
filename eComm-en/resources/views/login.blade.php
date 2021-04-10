@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="">
                <div class="form-group">
                    <label for="emailinput">Email address</label>
                    <input type="email" class="form-control" placeholder="Email" id="emailinput">
                </div>
                <div class="form-group">
                    <label for="userpassword">Password</label>
                    <input type="password" class="form-control" placeholder="password" id="userpassword">
                </div>
                <button class="btn btn-default" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection