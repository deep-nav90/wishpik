@extends('website.layout.layout')
@section('title','Wishpik')


@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<header class="done-header">
    <div class="container">
    <div class="d-flex justify-content-between">
        <div class="logo-img">
            <img src="{{url('public/auth/img/wishpik-logo.png')}}" alt="logo" />
         </div>
         <div class="profile-icon">
            <div class="d-flex align-items-center gap-2">
                <p class="pb-0 mb-0">Hey John's</p>
                <img src="{{url('public/auth/img/Man.png')}}" alt="logo" />
            </div>
         </div>
    </div>
    </div>
</header>

<section class="">
    <div class="container">
        <div class="done-content d-block">
            <div class="progress-bar-section w-100">
                <div class="back-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_926_101)">
<path d="M12.0001 24C18.6168 24 23.9998 18.6168 23.9998 11.9999C23.9998 5.38325 18.6168 0 12.0001 0C5.38338 0 0.000244141 5.38325 0.000244141 11.9999C0.000244141 18.6168 5.38338 24 12.0001 24ZM12.0001 1.6427C17.711 1.6427 22.3571 6.28892 22.3572 11.9999C22.3572 17.711 17.7111 22.3572 12.0001 22.3573C6.28917 22.3572 1.64306 17.711 1.64306 11.9998C1.64306 6.28903 6.28917 1.6427 12.0001 1.6427Z" fill="black"/>
<path d="M10.3885 17.1395C10.7093 17.4602 11.2294 17.4601 11.55 17.1395C11.8709 16.8187 11.8709 16.2987 11.5499 15.9778L8.39375 12.8218L17.5334 12.8209C17.987 12.8208 18.3547 12.4531 18.3547 11.9993C18.3546 11.5457 17.9869 11.1782 17.5333 11.1782L8.39331 11.1791L11.5503 8.02233C11.871 7.70156 11.871 7.18137 11.5503 6.86072C11.3898 6.70039 11.1797 6.62012 10.9694 6.62012C10.7592 6.62012 10.5491 6.70039 10.3887 6.86061L5.82971 11.4194C5.67563 11.5734 5.58911 11.7823 5.58911 12.0002C5.58922 12.2181 5.67574 12.4269 5.82982 12.5812L10.3885 17.1395Z" fill="black"/>
</g>
<defs>
<clipPath id="clip0_926_101">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>

                </div>
                <div class="progress-wrapper w-100">
                    <div class="progress-bar"><div class="progress" style="width: 40%;"></div></div>
                </div>
            </div>
            <div class="d-flex gap-2 align-items-center justify-content-center py-5">
                <img src="{{url('public/auth/img/cartoon.png')}}" alt="cartoon" />
                <div class="chip">What are your celebrating today?</div>
            </div>
           <div class="template-download">
               <div class="row">
                   <div class="col-md-6">
                       <div class="template-input download-template">
                            <div class="image">
                            <img src="{{url('public/auth/img/happy-lohri.png')}}" alt="lohri" />
                            <img src="{{url('public/auth/img/premium.svg')}}" alt="premium" class="premium-icon" />
                            <div>From Yogesh Aggarwal</div>
                            </div>
                            <h4>Happy Lohri Celebration</h4>
                            <span>Downloads: 3,245</span>
                        </div>
                        <div class="select-logo">
                            <img src="{{url('public/auth/img/netflix.svg')}}" alt="netflix" />
                        </div>
                   </div>
                   <div class="col-md-6">
                       <div class="content-list">
                           <div class="content-wrapper">
                               <h4>May this Lohri fill your life with joy, happiness, and love.</h4>
                           </div>
                           <div class="content-wrapper">
                               <h4>May this Lohri fill your life with joy, happiness, and love.</h4>
                           </div>
                           <div class="content-wrapper">
                               <h4>May this Lohri fill your life with joy, happiness, and love.</h4>
                           </div>
                           <div class="content-wrapper">
                               <h4>May this Lohri fill your life with joy, happiness, and love.</h4>
                           </div>
                           <div class="content-wrapper content-selected">
                               <h4>May this Lohri fill your life with joy, happiness, and love.</h4>
                           </div>
                       </div>
                       <div class="download-btns">
                           <p>From</p>
                           <button class="name-btn">Yogesh Aggarwal</button>
                           <button class="download-btn">Let’s Download</button>
                           <span>3 Assets Left</span>
                       </div>
                   </div>
               </div>
           </div>
           <div class="subscription-section">
               <div class="subscription-btn">
                   <button type="button"><img src="{{url('public/auth/img/king-icon.svg')}}" alt="king-icon" /><span>Subscribe </span> to remove watermark</button>
               </div>
               <p>Share</p>
               <div class="social-icons">
                   <a href="#"><img src="{{url('public/auth/img/whatsapp.svg')}}" alt="whatsapp" /></a>
                   <a href="#"><img src="{{url('public/auth/img/facebook.svg')}}" alt="facebook" /></a>
                   <a href="#"><img src="{{url('public/auth/img/instagram.svg')}}" alt="instagram" /></a>
                   <a href="#"><img src="{{url('public/auth/img/linkedin.svg')}}" alt="linkedin" /></a>
                   <a href="#"><img src="{{url('public/auth/img/twitter.svg')}}" alt="twitter" /></a>
                   <a href="#"><img src="{{url('public/auth/img/messenger.svg')}}" alt="messenger" /></a>
               </div>
           </div>
        </div>
    </div>
    
</section>