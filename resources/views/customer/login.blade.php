@extends('customer.layout.layout')
@section('title','Wishpik')


@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

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
                        <img src="{{url('public/auth/img/wishpik-logo.png')}}" alt="logo" />
                    </div>
                    <h6>Welcome back</h6>
                    <h3>Login to your account</h3>
                    <form id="loginForm" enctype='multipart/form-data'>
                             @csrf
                        <div class="form-group mb-4">
                            <label class="form-label">Phone No.</label>
                            <input type="tel" name="cust_phone" maxlength="10" class="form-control" placeholder="Enter Phone Number" />
                            <div class="error" id="cust_phone_error"></div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="cust_password" class="form-control" placeholder="Password" />
                            <div class="error" id="cust_password_error"></div>
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                            </div>
                            <a href="#">Forgot Password</a>
                        </div>
                        <button id="submitButton" type="submit" class="primary-btn btn w-100">Login now</button>
                        <div class="or-div">
                            <span>or</span>
                            <hr />
                        </div>
                        <buttom class="btn google-btn w-100" style="border-radius:5px !important">Or sign-in with google</buttom>
                        <p class="pt-5 text-center">Dont have an account? <a href="{{route('customer.signup')}}">Signup Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

$(document).ready(function() {
  $(document).ready(function() {
    $('input[name="cust_phone"]').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, ''); // Replace any non-numeric characters
    });
});
  $('#loginForm').on('submit', function(e) {
    e.preventDefault(); // Prevent form from submitting normally
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let phone = $('input[name="cust_phone"]').val();
    let password = $('input[name="cust_password"]').val();
   

    let isValid = true;
   
    // Clear previous errors
    $('.error').html('');

    // Front-end validation
    if (!phone) {
        $('#cust_phone_error').html('Please enter phone number.');
        isValid = false;
        return
    }
    if (!phone || phone.length !== 10) {
        $('#cust_phone_error').html('Please enter a valid 10-digit phone number.');
        isValid = false;
    }
    if (!password) {
        $('#cust_password_error').html('Please enter password.');
        isValid = false;
        return
    }
   

    if (isValid) {
        // Proceed with AJAX if the form is valid
        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('customer.login') }}",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
              console.log('myresponse',response)
                if (response.status) {
                   toastr.success(response.message);
                 window.location.href="{{route('customer.otp')}}";
                 
                }
            },
            error: function(xhr) {
                // Server-side validation errors are handled here
                if (xhr.status === 400) {
                    toastr.error(xhr.responseJSON.message);
                }
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                   
                    if (errors.cust_phone) {
                        $('#cust_phone_error').html(errors.cust_phone[0]);
                    }
                    if (errors.cust_email) {
                        $('#cust_password_error').html(errors.cust_email[0]);
                    }
                }
            }
        });
    }
});

});

</script>
@endsection