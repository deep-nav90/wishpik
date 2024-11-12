@extends('customer.layout.layout')
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
                   
                    <form id="otpForm" enctype='multipart/form-data'>
                    @csrf
                        <div class="form-group mb-4">
                            <input type="text" maxlength="6" name="otp" class="form-control" placeholder="Enter Otp" />
                            <div class="error" id="otp_error"></div>
                        </div>
                        
                        <button  id="submitButton" type="submit" class="primary-btn btn w-100" style="border-radius:5px !important">Almost Done</button>
                        
                        <p class="pt-5 text-center">Already have an account?  <a href="/newsite/user/login">Login Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
    
        $('input[name="otp"]').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, ''); // Replace any non-numeric characters
        });
        $('#otpForm').on('submit', function(e) {
            e.preventDefault(); 
            let otp = $('input[name="otp"]').val();
            let isValid = true;

            // Clear previous errors
            $('.error').html('');
            if(!otp)
            {
                $('#otp_error').html('Please enter a otp .');
                isValid = false;
                return
            }
            if (!otp || otp.length !== 6) {
                $('#otp_error').html('Please enter a valid 6-digit .');
                isValid = false;
            }
            if (isValid) {
                // Proceed with AJAX if the form is valid
                let formData = new FormData(this);
                $.ajax({
                url: "{{ route('customer.otp') }}",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                console.log('myresponse',response)

                    if (response.status) {
                     
                    toastr.success(response.message);
                    if(response?.type=='signup')
                    {
                        window.location.href="{{route('customer.profile')}}";
                    }
                    if(response?.type=='login')
                    {
                        window.location.href="{{route('customer.wish-select')}}";
                    }
                    
                     //   alert('Otp Successful!');
                        // Redirect or perform further action
                    }
                    else
                    {
                      
                        toastr.error(res.message);
                    }
                },
                error: function(xhr) {
                   
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        if (errors.otp) {
                            $('#otp_error').html(errors.otp[0]);
                        }
                    
                    }
                    if (xhr.status === 400) {
                        
                        toastr.error(xhr.responseJSON.message);
                        // let errors = xhr.responseJSON.errors;
                        // if (errors.otp) {
                        //     $('#otp_error').html(errors.otp[0]);
                        // }
                    
                    }
            }
        });
            }
        });
    });

</script>
@endsection