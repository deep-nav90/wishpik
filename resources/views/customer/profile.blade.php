@extends('customer.layout.layout')
@section('title','Wishpik')


@section('content')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

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
                                <img src="{{ url('public/auth/img/tick-icon.svg') }}" alt="img" class="tick-icon-1 tick d-none" />
                                <img src="{{ url('public/auth/img/profile-1.png') }}" alt="img" class="profile-img" data-id="1" />
                            </div>
                            <div class="profile-card">
                                <img src="{{ url('public/auth/img/tick-icon.svg') }}" alt="img" class="tick-icon-2 tick tick-icon" />
                                <img src="{{ url('public/auth/img/profile-2.png') }}" alt="img" class="profile-img" data-id="2" />
                            </div>
                        </div>

                        <button type="button" class="primary-btn btn w-100 btnsubmit" style="border-radius:5px !important">Finish</button>

                        <p class="pt-5 text-center">Already have an account? <a href="/newsite/user/login">Login Here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        var selectedImageId = 2;
        $('.profile-img').click(function() {
            var imageId = $(this).data('id'); // Get the data-id of the clicked image
            selectedImageId = imageId;
            $('.tick').removeClass('tick-icon');
            $('.tick').addClass('d-none');
            // Add 'selected' class to the tick icon associated with clicked image
            $('.tick-icon-' + imageId).addClass('tick-icon');
            $('.tick-icon-' + imageId).removeClass('d-none');



        });
        $('.btnsubmit').click(function() {
            if (selectedImageId !== null) {
                console.log("Selected Image ID: " + selectedImageId); // Now you have the selected imageId
                // You can proceed to send this value in an AJAX call or form submission
                $.ajax({
                    url: "{{ route('customer.profile') }}", // The route in Laravel to handle the request
                    type: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}", // CSRF token for security
                        imageId: selectedImageId
                    },
                    success: function(response) {
                        if (response.status) {

                            toastr.success(response.message);
                            window.location.href = "{{route('customer.signupdone')}}";
                            //   alert('Otp Successful!');
                            // Redirect or perform further action
                        }

                    },
                    error: function(xhr) {

                        if (xhr.status === 400) {

                            toastr.error(xhr.responseJSON.message);
                        }
                    }
                });

            } else {
                alert("No image selected.");
            }
        });

    });
</script>
@endsection