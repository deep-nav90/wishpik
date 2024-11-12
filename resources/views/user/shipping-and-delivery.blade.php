

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
       <p>This Shipping and Delivery Policy outlines the procedures and terms regarding the shipping and delivery of physical products associated with our subscription-based website ("Site") operated by Wishpik ("we", "us", or "our"). By subscribing to our services and ordering products from our Site, you agree to adhere to the terms of this policy.</p>

<h3>Shipping Information</h3>

<p><b>Shipping Methods:</b> We utilize reputable shipping carriers to deliver our products to customers. The available shipping methods may vary depending on the destination and the nature of the product.</p>

<p><b>Shipping Rates:</b> Shipping rates are calculated based on factors such as the weight of the package, destination location, and selected shipping method. Shipping rates will be displayed during the checkout process.</p>

<p><b>Shipping Addresses:</b> Please ensure that the shipping address provided during the checkout process is accurate and complete. We are not responsible for delays or non-delivery due to incorrect or incomplete shipping addresses provided by the customer.</p>

<p><b>Shipping Restrictions:</b> Certain products may be subject to shipping restrictions or regulations based on their nature or destination. We comply with all applicable laws and regulations regarding the shipping of products.</p>

<h3>Delivery Information</h3>

<p><b>Delivery Timeframes:</b> Delivery timeframes may vary depending on factors such as the shipping method selected, the destination location, and any unforeseen circumstances affecting the shipping carrier's operations. Estimated delivery times will be provided during the checkout process.</p>

<p><b>Tracking Information:</b> Once your order has been shipped, you will receive a confirmation email with tracking information, if available. You can use this tracking information to monitor the status and location of your shipment.</p>

<p><b>Delivery Confirmation:</b> Delivery confirmation may be required for certain shipments. Please ensure that someone is available to receive the package at the designated delivery address.
</p>
<p><b>Non-Delivery:</b> In the event of non-delivery or delivery issues, please contact our customer support team for assistance. We will work with the shipping carrier to resolve any delivery-related issues promptly.</p>

<h3>International Shipping</h3>

<p><b>Customs and Duties:</b> International shipments may be subject to customs clearance procedures and import duties or taxes imposed by the destination country. These additional charges are the responsibility of the recipient and are not included in the shipping charges.</p>

<p><b>Delivery Timeframes:</b> International delivery timeframes may vary significantly depending on customs clearance procedures and other factors beyond our control. We appreciate your patience and understanding regarding international shipments.</p>

<h3>Changes to the Policy</h3>

<p>We reserve the right to modify or update this Shipping and Delivery Policy at any time without prior notice. Any changes will be effective immediately upon posting on our Site. It is your responsibility to review this policy periodically for updates.</p>

<h3>Contact Us</h3>

<p>If you have any questions about our Shipping and Delivery Policy, please contact us at [contact information]. We are here to assist you and address any concerns you may have regarding shipping and delivery of our products.</p>
       </div>
    </div>
    
</section>


