@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<section class="login-section signup-section">
    <div class="row">
        <div class="col-md-6 image-section">
            <div class="image-content">
                <div class="logo mb-5">
                        <img src="{{url('public/auth/img/wishpik-logo.png')}}" alt="logo" />
                    </div>
            <h2>“I am literally superhuman<br /> because of Wishpik.”</h2>
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
                    <form id="registerForm" enctype='multipart/form-data'>
                             @csrf
                        <div class="form-group mb-4">
                            <label class="form-label">Name</label>
                            <input type="text" name="cust_name" class="form-control" placeholder="Name" />
                        </div>
                        @if($errors->has('cust_name'))
                          <div class="error">{{ $errors->first('cust_name') }}</div>
                        @endif
                        <div class="form-group mb-4">
                            <label class="form-label">Phone</label>
                            <input type="text" name="cust_phone" maxlength="10" class="form-control" placeholder="Phone No." />
                        </div>
                        @if($errors->has('cust_phone'))
                          <div class="error">{{ $errors->first('cust_phone') }}</div>
                        @endif
                        <div class="form-group mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" name="cust_email" class="form-control" placeholder="Email Address" />
                        </div>
                        @if($errors->has('cust_email'))
                          <div class="error">{{ $errors->first('cust_email') }}</div>
                        @endif
                        <button id="submitButton" type="submit" class="primary-btn btn w-100" style="border-radius:5px !important">Next Step </button>
                        <!-- <a href="/newsite/user/otp" class="primary-btn btn w-100" style="border-radius:5px !important">Next Step</a> -->
                        
                        <p class="pt-5 text-center">Already have an account?  <a href="/newsite/user/login">Login Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        var registerform = $( "#registerForm" );
        $.validator.addMethod('phoneCustom', function(value, element) {
    return this.optional(element) || /^\d{10}$/.test(value);
}, 'Please enter a valid 10-digit phone number');
      registerform.validate({
        ignore: [],
        debug: false,
        rules: {
          cust_name: {
            required: true,
            maxlength:30,
            minlength:2
          },
          cust_phone: {
            required: true,
            digits: true,
            phoneCustom: true,
            maxlength:10,
            minlength:10
          },
          cust_email: {
            required: true,
            email: true,
            accept:"[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}",
            maxlength:30,
            minlength:2
          },
          
          
        },
        messages: {
          cust_name: {
            required: "Name field is required."
          },
          cust_phone: {
            required: "Phone field is required.",
            phoneCustom: "Please enter a valid 10-digit phone number"
          },
          
          cust_email: {
          required: "Please enter your email address",
          email: "Please enter a valid email address",
        },
         
                    
        },
        submitHandler:function(form){
           $("#submitButton").attr('disabled', "true");
            var fd = new FormData();
                var other_data = $('#registerForm').serializeArray();
                var data = fd;
                fd.append('_token', '{{ csrf_token() }}');
                $.each(other_data,function(key,input){
                      fd.append(input.name,input.value);
                  });
                $.ajax({
                    url:"{{route('customer.signup')}}",
                    
                    data: fd,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(res){
                         console.log("resultback",res);
                        // return false;
                        $("#submitButton").attr('disabled', "false");
                        if(res.status == true){
                          toastr.success(res.message);
                          window.location.href="{{route('customer.otp')}}";
                            // swal({
                            //     title: "Information",
                            //     text: res.message,
                            //     type: "success",
                            //     showCancelButton: false,
                            // }, function(willDelete) {
                            //   alert('done');
                                
                            // });

                            
                        }else{
                          toastr.error(res.message);
                            // swal("Alert", res.message, "error");
                        }

                       
                    },
                    error: function(data, textStatus, xhr) {
                        if(data.status == 422){
                        
                        } 
                        toastr.error('Something went wrong. Please try again')
                        setTimeout(() => {
                            $("#lodaerModal").modal("hide");
                            $("#submitButton").removeAttr('disabled');
                        }, 500);
                    }
                });
            },
        onkeyup: false,
        onblur: true
    })
    })
</script>
@endsection