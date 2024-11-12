@extends('customer.layout.layout')
@section('title','Wishpik')


@section('content')

@extends('customer.include.topheader')

<section class="done-section">
    <div class="container">
        <div class="done-content">
            <img src="{{url('public/auth/img/done-icon.png')}}" alt="done" />
            <h1>Hooray! You’re Done!</h1>
            
        <button class="primary-btn btn w-100 whatsapp-btn" style="border-radius:5px !important"><img src="{{url('public/auth/img/whatsapp.svg')}}" alt="whatsapp" /><span>Create your first wish</span></button>
        </div>
    </div>
    
</section>
@endsection