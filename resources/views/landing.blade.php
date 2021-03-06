@extends('template')

@section('style')
<link href="{{URL::asset('css/landing.css')}}" rel="stylesheet">
@endsection

@section('title')
    Junior Webmaster Camp #9
@endsection

@section('content')
<div id="app">
    <section class="landing">
        <div class="logo-container">
            <img src="{{URL::asset('img/logo.png')}}" class="logo animated fadeInUp">
            <img src="{{URL::asset('img/cloud/left-top.png')}}" class="floating-cloud floating-cloud-left left-top">
            <img src="{{URL::asset('img/cloud/left-mid.png')}}" class="floating-cloud floating-cloud-left left-mid">
            <img src="{{URL::asset('img/cloud/left-bottom.png')}}" class="floating-cloud floating-cloud-left left-bottom">
            <img src="{{URL::asset('img/cloud/right-top.png')}}" class="floating-cloud floating-cloud-right right-top">
            <img src="{{URL::asset('img/cloud/right-mid.png')}}" class="floating-cloud floating-cloud-right right-mid">
            <img src="{{URL::asset('img/cloud/right-bottom.png')}}" class="floating-cloud floating-cloud-right right-bottom">
        </div>
        <div class="coming-soon-container animated zoomIn">
            <h1 class="coming-soon-text">เปิดรับสมัครเร็ว ๆ นี้</h1>
            <p class="supported-by-text">สนับสนุนโดย สมาคมผู้ดูแลเว็บไทย</p>
            <subscribe></subscribe>
        </div>
        <div class="social-button-group">
            <a class="" href="https://www.facebook.com/jwcth" target="newtab" style="padding-right: 20px;"><i class="animated fadeInDown fa fa-facebook social-icon facebook-button"></i></a>
            <a href="https://www.twitter.com/jwcth" target="newtab"><i class="animated fadeInDown fa fa-twitter social-icon twitter-button"></i></a>
        </div>
    </section>
</div>
@endsection
