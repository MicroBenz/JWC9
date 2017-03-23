@extends('template')

@section('style')
<link href="{{URL::asset('css/landing.css')}}" rel="stylesheet">
@endsection

@section('title')
JWC#9
@endsection

@section('content')
<section class="landing">
    <div class="logo-container">
        <img src="{{URL::asset('img/logo.png')}}" class="logo">
        <img src="{{URL::asset('img/cloud/left-top.png')}}" class="floating-cloud left-top">
        <img src="{{URL::asset('img/cloud/left-mid.png')}}" class="floating-cloud left-mid">
        <img src="{{URL::asset('img/cloud/left-bottom.png')}}" class="floating-cloud left-bottom">
        <img src="{{URL::asset('img/cloud/right-top.png')}}" class="floating-cloud right-top">
        <img src="{{URL::asset('img/cloud/right-mid.png')}}" class="floating-cloud right-mid">
        <img src="{{URL::asset('img/cloud/right-bottom.png')}}" class="floating-cloud right-bottom">  
    </div>
    <div class="coming-soon-container">
        <h1 class="coming-soon-text">เปิดรับสมัครเร็วๆ นี้</h1>
        <p class="supported-by-text">สนับสนุนโดย สมาคมผู้ดูแลเว็บไทย</p>
        <h2 class="subscribe-text">กรอกข้อมูลเพื่อติดตามข่าวสาร</h2>
    </div>
    <div class="social-button-group">
        <a href="https://www.facebook.com" target="newtab" class="facebook-button"><i class="fa fa-facebook"></i></a>
    </div>
</section>
@endsection
