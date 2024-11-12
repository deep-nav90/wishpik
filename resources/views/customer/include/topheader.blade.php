<style>
    .toplogo{
        width: 186px;
    margin-top: 17px;
    height:80px !important;
    object-fit:contain;
    }
    </style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@php
    // Retrieve and decode session data
    $userData = session('user') ? json_decode(base64_decode(session('user')), true) : null;
@endphp


<header class="done-header">
    <div class="container">
    <div class="d-flex justify-content-between">
        <div class="logo-img">
            <img src="{{url('public/auth/img/wishpik-logo.png')}}" alt="logo" />
         </div>
         <div class="profile-icon">
            <div class="d-flex align-items-center gap-2">
                <p class="pb-0 mb-0">Hey @if($userData) {{$userData['user_name']}}@endif</p>
                <img src="{{url('public/auth/img/Man.png')}}" alt="logo" />
            </div>
         </div>
    </div>
    </div>
</header>