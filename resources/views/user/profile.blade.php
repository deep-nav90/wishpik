@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<section class="login-section profile-section">
    <div class="row">
        <div class="col-md-6 image-section">
            <div class="image-content">
                
            <h2>Create Design<br />
with One Click</h2>
            </div>
        </div>
        <div class="col-md-6">
            <div class="login-form">
               
                <div class="form-content">
                    <div class="steps-content">
                        <h5>Step 3 of 3</h5>
                        <div class="steps-flex">
                            <div class="step step-active">
                            </div>
                            <div class="step step-active">
                            </div>
                            <div class="step step-active">
                            </div>
                        </div>
                    </div>
                    <h6>Start growing your brand on social media in two clicks</h6>
                    <h3>What Kind of Design You
are looking for?</h3>
                    <form>
                        <div class="d-flex gap-4">
                            <div class="profile-card">
                                <img src="{{url('public/auth/img/profile-1.png')}}" alt="img" />
                            </div>
                            <div class="profile-card">
                                <img src="{{url('public/auth/img/tick-icon.svg')}}" alt="img" class="tick-icon" />
                                <img src="{{url('public/auth/img/profile-2.png')}}" alt="img" />
                            </div>
                        </div>
                        
                        <a href="/newsite/user/signupdone" class="primary-btn btn w-100" style="border-radius:5px !important">Finish</a>
                        
                        <p class="pt-5 text-center">Already have an account?  <a href="/newsite/user/login">Login Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>