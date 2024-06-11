@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<section class="login-section signup-section otp-section">
    <div class="row">
        <div class="col-md-6 image-section">
            <div class="image-content">
                <div class="logo mb-5">
                        <img src="{{url('public/auth/img/wishpik-logo.png')}}" alt="logo" />
                    </div>
            <h2>Marketing that<br />gets results</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="login-form">
               
                <div class="form-content">
                    <div class="steps-content">
                        <h5>Step 2 of 3</h5>
                        <div class="steps-flex">
                            <div class="step step-active">
                            </div>
                            <div class="step step-active">
                            </div>
                            <div class="step">
                            </div>
                        </div>
                    </div>
                    <h6>Start growing your brand on social media in two clicks</h6>
                    <h3>Enter your OTP</h3>
                    <form>
                        <div class="form-group mb-4">
                            <input type="text" maxlength="6" class="form-control" placeholder="Enter Otp" />
                        </div>
                        
                        <a href="/newsite/user/profile" class="primary-btn btn w-100" style="border-radius:5px !important">Almost Done</a>
                        
                        <p class="pt-5 text-center">Already have an account?  <a href="/newsite/user/login">Login Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>