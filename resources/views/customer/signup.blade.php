@extends('customer.layout.layout')
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
                            <div class="error" id="cust_name_error"></div>
                        </div>
                     
                          
                      
                        <div class="form-group mb-4">
                            <label class="form-label">Phone</label>
                            <input type="tel" name="cust_phone" maxlength="10" class="form-control" placeholder="Phone No." />
                            <div class="error" id="cust_phone_error"></div>
                        </div>
                       
                        <div class="form-group mb-4">
                            <label class="form-label">Email</label>
                            <input type="email" name="cust_email" class="form-control" placeholder="Email Address" />
                            <div class="error" id="cust_email_error"></div>
                        </div>
                      
                        <button id="submitButton" type="submit" class="primary-btn btn w-100" style="border-radius:5px !important">Next Step </button>
                        <!-- <a href="/newsite/user/otp" class="primary-btn btn w-100" style="border-radius:5px !important">Next Step</a> -->
                        
                        <p class="pt-5 text-center">Already have an account?  <a href="{{route('customer.login')}}">Login Here</a></p>
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
  $('#registerForm').on('submit', function(e) {
    e.preventDefault(); // Prevent form from submitting normally
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let name = $('input[name="cust_name"]').val();
    let phone = $('input[name="cust_phone"]').val();
    let email = $('input[name="cust_email"]').val();

    let isValid = true;

    // Clear previous errors
    $('.error').html('');

    // Front-end validation
    if (!name) {
        $('#cust_name_error').html('Please enter your name.');
        isValid = false;
    }
    if (!phone || phone.length !== 10) {
        $('#cust_phone_error').html('Please enter a valid 10-digit phone number.');
        isValid = false;
    }
    if (!email) {
        $('#cust_email_error').html('Please enter your email address.');
        isValid = false;
    } else if (!emailRegex.test(email)) {
        $('#cust_email_error').html('Please enter a valid email address.');
        isValid = false;
    }

    if (isValid) {
        // Proceed with AJAX if the form is valid
        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('customer.signup') }}",
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
                    if (errors.cust_name) {
                        $('#cust_name_error').html(errors.cust_name[0]);
                    }
                    if (errors.cust_phone) {
                        $('#cust_phone_error').html(errors.cust_phone[0]);
                    }
                    if (errors.cust_email) {
                        $('#cust_email_error').html(errors.cust_email[0]);
                    }
                }
            }
        });
    }
});

});

</script>

<!-- <script>
    $(document).ready(function(){
$(document).on('click','#submitButton',function(){


        var registerform = $( "#registerForm" );
        $.validator.addMethod('phoneCustom', function(value, element) {
    return this.optional(element) || /^\d{10}$/.test(value);
}, 'Please enter a valid 10-digit phone number');
console.log('myfirst')
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
          alert('submi')

           $("#submitButton").attr('disabled', "true");
            var fd = new FormData();
                var other_data = $('#registerForm').serializeArray();
                var data = fd;
                fd.append('_token', '{{ csrf_token() }}');
                $.each(other_data,function(key,input){
                      fd.append(input.name,input.value);
                  });
                  console.log('myfcdddd',fd)
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
  });
</script> -->
@endsection