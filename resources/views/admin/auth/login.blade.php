
@extends('admin.layout.loginlayout')
@section('title','Wishpik')
@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Wish</b>Pik</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      @if(Session::has('message'))
        <section class="content-header message-header">
                        <div class="container-fluid">
                              <div class="row">
                                    <div class="col-sm-12">
                                          <p class="alert alert-success success-bg mb-0">{{ Session::get('message') }}</p>
                                    </div>
                              </div>
                        </div>
            </section>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger mt-3" role="alert" style="font-size: 12px !important;">
            {{ Session::get('error') }}
            </div>
        @endif
      <form  method="post" id="loginForm" class="login_form"  action="{{ route('logincheck') }}">
      {{ csrf_field() }}
      <div class="mb-3">
        <div class="input-group">
          <input type="email" id="login_email" name="email"  value="" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        
             
        </div>
        @if($errors->has('email'))
            <div class="error-msg">
                <p>{{ $errors->first('email') }}</p>
            </div>
        @endif
        </div>
       
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
         
        </div>
        @if($errors->has('password'))
            <div class="error-msg">
                <p>{{ $errors->first('password') }}</p>
            </div>
        @endif
        <!-- <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          
        </div> -->
        <div class="row">
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<script>
  
</script>

@endsection()