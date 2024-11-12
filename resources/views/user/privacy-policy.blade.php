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

<section class="py-5">
    <div class="container">
       <div class="section-content">
           <p>This Privacy Policy describes how Wishpik ("we", "us", or "our") collects, uses, and shares personal information of users ("User", "you", or "your") who visit or use our subscription-based website ("Site") and services. By accessing or using our Site and services, you consent to the collection, use, and disclosure of your personal information in accordance with this Privacy Policy.</p>

<h3>Information We Collect</h3>

<p>We may collect personal information from Users in various ways, including when they visit our Site, register on the Site, place an order, subscribe to our services, respond to a survey, fill out a form, and in connection with other activities, services, features, or resources we make available on our Site. The types of personal information we may collect include, but are not limited to:</p>

<ul><li>Name</li><br />
<li>Email address</li><br />
<li>Mailing address</li><br />
<li>Phone number</li><br />
<li>Payment information (such as credit card details)</li><br />
<li>User-generated content (such as comments and messages)</li></ul>
<p>We may also collect non-personal information about Users whenever they interact with our Site. Non-personal information may include the browser name, the type of computer or device, and technical information about Users' means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p>

<h3>How We Use Collected Information</h3>

<h3>We may use the personal information we collect from Users for the following purposes:</h3>

<ul><li>To provide and maintain our services</li><br />
<li>To process transactions and fulfill orders</li><br />
<li>To send periodic emails regarding their subscription, orders, or other products and services</li><br />
<li>To personalize User experience and improve our Site</li><br />
<li>To respond to User inquiries, questions, and concerns</li><br />
<li>To detect, prevent, and address technical issues and security vulnerabilities</li></ul>
<h3>How We Protect Your Information</h3>

<p>We adopt appropriate data collection, storage, processing practices, and security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information, username, password, transaction information, and data stored on our Site.</p>

<h3>Sharing Your Personal Information</h3>

<p>We do not sell, trade, or rent Users' personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates, and advertisers for the purposes outlined above.</p>
       </div>
    </div>
    
</section>
