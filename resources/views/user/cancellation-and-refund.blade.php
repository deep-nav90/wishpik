

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
          <p>This Cancellation and Refund Policy outlines the procedures and guidelines for canceling subscriptions and requesting refunds on our subscription-based website ("Site") operated by [Your Company Name] ("we", "us", or "our"). By subscribing to our services and using our Site, you agree to adhere to the terms of this policy.</p>

<h3>Cancellation of Subscription</h3>

<p><b>Cancellation Process:</b> You may cancel your subscription at any time by accessing your account settings on our Site or by contacting our customer support team. Upon cancellation, your subscription will remain active until the end of the current billing cycle. You will not be charged for any subsequent billing periods.</p>

<p><b>No Partial Refunds:</b> We do not offer partial refunds for unused portions of subscription periods. You will continue to have access to our services until the end of the current billing cycle after cancellation.</p>

<p><b>Automatic Renewal:</b> If you do not cancel your subscription before the end of the current billing cycle, your subscription will automatically renew, and you will be billed for the next billing period.</p>

<h3>Refund Policy</h3>

<p><b>Eligibility:</b> We offer refunds only in limited circumstances and at our discretion. Refund requests must be submitted within [number] days of the initial subscription purchase or renewal.
</p>
<p><b>Valid Reasons for Refunds:</b> Refunds may be issued in the following situations:</p>

<p>Technical issues preventing access to our services, which cannot be resolved within a reasonable time frame.
Unauthorized charges or billing errors.</p>
<p><b>Refund Process:</b> To request a refund, please contact our customer support team with detailed information about the reason for the refund request. We reserve the right to assess the validity of refund requests and may require additional information to process the refund.</p>

<p><b>Refund Method:</b> Refunds will be issued using the original payment method used for the subscription purchase. Please allow [number] business days for the refund to reflect in your account.
</p>
<p><b>Non-Refundable Items:</b> Certain fees, such as setup fees or transaction fees, are non-refundable unless otherwise specified.</p>

<h3>Changes to the Policy</h3>

<p>We reserve the right to modify or update this Cancellation and Refund Policy at any time without prior notice. Any changes will be effective immediately upon posting on our Site. It is your responsibility to review this policy periodically for updates.</p>

<h3>Contact Us</h3>

<p>If you have any questions about our Cancellation and Refund Policy, please contact us at [contact information]. We are here to assist you and address any concerns you may have regarding cancellations or refunds.</p>
       </div>
    </div>
    
</section>


