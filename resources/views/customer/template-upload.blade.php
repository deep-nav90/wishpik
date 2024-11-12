@extends('customer.layout.layout')
@section('title','Wishpik')


@section('content')
@extends('customer.include.topheader')

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
            <div class="upload-files">
                <div class="upload-wrapper">
                    <div class="upload-border">
                        <div class="upload-content">
                             <img src="{{url('public/auth/img/upload-icon.svg')}}" alt="upload-icon" />
                             <h6>Drag and Drop Logo Here</h6>
                             <span>Or</span>
                             <button type="button">Browse</button>
                        </div>
                        <input type='file' />
                     </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection

