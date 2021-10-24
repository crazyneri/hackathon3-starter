@extends('layouts\index')
@section('main')

<div class="container-login">
    <h1 class="heading-form">Work Like Charm VetClinic</h1>
    
    <form class="form-login" action="/" method="get">
        <div class="container-form">
            <div class="login">
                <label class="label-login" for="username">Username</form>
                <input class="input input-login" type="text" name="username">
            </div>
            <div class="login">
                <label class="label-login" for="username">Password</form>
                <input class="input input-login" type="text" name="password">
            </div>
            <div class="login">
                <button class="btn btn-login">Log in</button>
            </div>
        </div>
    </form>
</div>
@endsection