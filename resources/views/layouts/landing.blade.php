@extends('layouts\index')
@section('main')

<h1>Work Like Charm VetClinic</h1>

<form action="/" method="get">
<div class="form form-login">
    <div class="login">
        <label class="label-login" for="username">Username</form><br>
        <input class="input input-login" type="text" name="username">
    </div>
    <div class="login">
        <label class="label-login" for="username">Password</form><br>
        <input class="input input-login" type="text" name="password">
    </div>
    <button class="btn btn-login">Log in</button>
</div>
</form>
@endsection