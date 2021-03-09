@extends('layouts.guest')

@section('content')
<div class="login-box">
  @if ($message = Session::get('error'))
  <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
  @endif

  @if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="login-box-body">
    <div class="login-logo">
      <a href="#"><img src=""><img src="{{ asset("images/wira.jpg")}}" style="width:120px;"></a>
    </div>
    <!-- /.login-logo -->
    <b class="login-box-msg">Silahkan Masukan Username dan Password</b>

    <form action="{{ url("login") }}" method="POST">

      {{ csrf_field() }}
      <div class="form-group has-feedback">

        <input type="username" name="username" value="{{ old("username") }}" class="form-control" placeholder="Username">

        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-success btn-flat" style="width:100% !important">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>
    <a href="{{ route("register") }}" class="btn btn-primary btn-flat" style="width:100% !important">Daftar Akun Baru</a>
    <br><br>
    <a href="{{ url("/password/reset") }}" class="" style="width:100% !important">Lupa Password</a>

  </div>
  @endsection