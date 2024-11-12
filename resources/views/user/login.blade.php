@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section class="login-section">
    <div class="row">
        <div class="col-md-6 image-section">
            <div class="image-content">
            <h2>Manage your<br /> business digitally</h2>
            <p>Build stronger customer relationships</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="login-form">
                <div class="logo">
                    
                </div>
                <div class="form-content">
                    <div class="logo mb-4">
                        <img src={{url('public/auth/img/wishpik-logo.png')}} alt="logo" />
                    </div>
                    <h6>Welcome back</h6>
                    <h3>Login to your account</h3>
                    <form>
                        <div class="form-group mb-4">
                            <label class="form-label">Phone/Email</label>
                            <input type="text" class="form-control" placeholder="Phone/Email" />
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Password" />
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                            </div>
                            <a href="#">Forgot Password</a>
                        </div>
                        <a href="/newsite/user/otp" class="primary-btn btn w-100">Login now</a>
                        <div class="or-div">
                            <span>or</span>
                            <hr />
                        </div>
                        <buttom class="btn google-btn w-100" style="border-radius:5px !important">Or sign-in with google</buttom>
                        <p class="pt-5 text-center">Dont have an account? <a href="/newsite/user/signup">Signup Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>