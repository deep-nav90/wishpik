@extends('customer.layout.layout')
@section('title','Wishpik')


@section('content')

@extends('customer.include.topheader')
<style>
/* Ensure the image stays fixed and the text content stays inside */
.image-container {
    position: relative;
    width: 100%; /* Full width container */
    height: 400px; /* Adjust height based on your design */
    overflow: hidden; /* Ensure content doesn't overflow outside the image */
    background-color: #f4f4f4; /* Fallback background if image doesn't load */
}

/* Center the wish text initially */
#wish-text {
    position: absolute;
    top: 50%;
    left: 50%;
    /* transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5); */
    color: white;
    padding: 1px 1px;
    font-size: 14px;
    border-radius: 5px;
    cursor: move; /* Indicates that the text is draggable */
    transition: cursor 0.2s ease;
}
#wish-text-name{
    position: absolute;
    top: 75%;
    left: 5%;
    /* transform: translate(-50%, -50%);
    background-color: rgba(0, 0, 0, 0.5); */
    color: white;
    padding: 1px 1px;
    font-size: 14px;
    border-radius: 5px;
}
#wish-text.grabbing {
    cursor: grabbing;
}

/* Ensure text stays inside the image container */
.text-overlay {
    max-width: 100%; /* Ensure text doesn't overflow horizontally */
    word-wrap: break-word;
}

.content-wrapper {
    cursor: pointer;
}

/* Optional: Styling for when a text is selected */
.wish-select h4 {
    color: #333;
    transition: color 0.3s ease;
}

.wish-select:hover h4 {
    color: #007bff; /* Color change on hover */
}


    </style>
    @php
    // Retrieve and decode session data
    $userData = session('user') ? json_decode(base64_decode(session('user')), true) : null;
@endphp
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
                        <!-- Background image container -->
                        <div class="image-container" style="position: relative;">
                            <img id="product-image" src="{{$products->product_image}}" alt="lohri" style="display: block; width: 100%; height: auto;" />
                            
                            <!-- This is where the text from loop will be displayed -->
                            <div id="wish-text" class="text-overlay" style="position: absolute;"></div>
                            <div id="wish-text-name" class="text-overlay" style="position: absolute;"></div>
                        </div>
                        <h4>Happy Lohri Celebration</h4>
                        <span>Downloads: 3,245</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="content-list">
                        @foreach($wishes as $wishtext)
                            <!-- Text that will change based on clicks -->
                            <div class="content-wrapper wish-select" id="wish_{{ $wishtext->id }}" data-product-id="{{ $wishtext->product_wish }}">
                                <h4>{{$wishtext->product_wish}}</h4>
                            </div>
                        @endforeach
                    </div>
                    <div class="download-btns">
                        <p>From</p>
                        <button class="name-btn clickonname content-selected" id="{{$userData['user_name']}}" >@if($userData) {{$userData['user_name']}}@endif</button>
                        <button class="download-btn">Let’s Download</button>
                        <span>3 Assets Left</span>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>

    $(document).on('click', '.wish-select', function () {
    let cag = this.id;
    let mar = cag.split('_');
    let categoryId = mar[1];
    let productId = $(this).data('product-id');

    console.log('Selected wish ID:', categoryId, 'Product ID:', productId);

    document.querySelectorAll('.wish-select').forEach(function (element) {
        element.classList.remove('content-selected');
    });

    // Add selected class
    document.getElementById('wish_' + categoryId).classList.add('content-selected');
    $('#wish-text').text($(this).data('product-id')); // Update the wish text
});

$(document).ready(function () {
    let isDragging = false;  // Track dragging state
    let offsetX, offsetY;     // Track drag offsets
    let currentTextElement;   // Element being dragged

    // Draggable wish text
    $('#wish-text').on('mousedown', function (event) {
        isDragging = true;
        currentTextElement = this;
        offsetX = event.offsetX;
        offsetY = event.offsetY;
        $(this).css('cursor', 'grabbing');
    });

    $(document).on('mouseup', function () {
        if (isDragging) {
            $(currentTextElement).css('cursor', 'move');
        }
        isDragging = false;
    });

    $(document).on('mousemove', function (event) {
        if (isDragging && currentTextElement) {
            const rect = $(currentTextElement).parent().offset(); // Parent container offset
            const parentWidth = $(currentTextElement).parent().width(); // Get parent width
            const parentHeight = $(currentTextElement).parent().height(); // Get parent height
            const x = event.pageX - rect.left - offsetX; // Calculate new X position
            const y = event.pageY - rect.top - offsetY;   // Calculate new Y position
            
            // Ensure text stays within parent bounds
            if (x >= 0 && x + $(currentTextElement).outerWidth() <= parentWidth &&
                y >= 0 && y + $(currentTextElement).outerHeight() <= parentHeight) {
                $(currentTextElement).css({
                    left: x + 'px',
                    top: y + 'px'
                });
            }
        }
    });
});

// Handle name click and toggle
$(document).on('click', '.clickonname', function () {
    let myname = this.id;
    if ($(this).hasClass('mybtnactive')) {
        $(this).removeClass('mybtnactive');
        $('#wish-text-name').html('');
    } else {
        $('.clickonname').removeClass('mybtnactive');  // Remove active state from all buttons
        $(this).addClass('mybtnactive');               // Add active state to clicked button
        $('#wish-text-name').html(myname);             // Set the name in the image
    }
});

document.querySelector('.download-btn').addEventListener('click', function () {

    
    const element = document.querySelector('.image-container');
    
    html2canvas(element, { allowTaint: true, useCORS: true }).then(function (canvas) {
        const imageURL = canvas.toDataURL('image/png');
        
        const link = document.createElement('a');
        link.href = imageURL;
        link.download = 'lohri-wish.png';  // Set the download file name
        
        link.click();
    });
});
</script>
@endsection