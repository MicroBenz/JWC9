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
        <img src="{{URL::asset('img/cloud/left-top.png')}}" class="floating-cloud left-top">
        <img src="{{URL::asset('img/cloud/left-mid.png')}}" class="floating-cloud left-mid">
        <img src="{{URL::asset('img/cloud/left-bottom.png')}}" class="floating-cloud left-bottom">
        <img src="{{URL::asset('img/cloud/right-top.png')}}" class="floating-cloud right-top">
        <img src="{{URL::asset('img/cloud/right-mid.png')}}" class="floating-cloud right-mid">
        <img src="{{URL::asset('img/cloud/right-bottom.png')}}" class="floating-cloud right-bottom">  
    </div>
</section>
@endsection
