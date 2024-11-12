@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section class="login-section signup-section">
    <div class="row">
        <div class="col-md-6 image-section">
            <div class="image-content">
                <div class="logo mb-5">
                        <img src={{url('public/auth/img/wishpik-logo.png')}} alt="logo" />
                    </div>
            <h2>“I am literally superhuman<br />
because of Wishpik.”</h2>
            <p>Rohit Sharma, MD Freshworks</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="login-form">
               
                <div class="form-content">
                    <div class="steps-content">
                        <h5>Step 1 of 3</h5>
                        <div class="steps-flex">
                            <div class="step step-active">
                            </div>
                            <div class="step">
                            </div>
                            <div class="step">
                            </div>
                        </div>
                    </div>
                    <h6>Start growing your brand on social media in two clicks</h6>
                    <h3>Sign Up Now</h3>
                    <form>
                        <div class="form-group mb-4">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" placeholder="Name" />
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Phone</label>
                            <input type="password" class="form-control" placeholder="Phone No." />
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Email</label>
                            <input type="password" class="form-control" placeholder="Email Address" />
                        </div>
                        <a href="/newsite/user/otp" class="primary-btn btn w-100" style="border-radius:5px !important">Next Step</a>
                        
                        <p class="pt-5 text-center">Already have an account?  <a href="/newsite/user/login">Login Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>