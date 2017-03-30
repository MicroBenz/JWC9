<!DOCTYPE html>
<html lang="th" style="width: 100%; height: 100%">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>@yield('title')</title>
    <meta name="description" content="Junior Webmaster Camp #9">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Junior Webmaster Camp #9">
    <meta itemprop="description" content="คว้าโอกาสแล้วเปลี่ยนเป็นสุดยอด Class Digital">
    <meta itemprop="image" content="{{URL::asset('img/cover.png')}}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="คว้าโอกาสแล้วเปลี่ยนเป็นสุดยอด Class Digital"/>
    <meta name="twitter:title" content="Junior Webmaster Camp #9"/>
    <meta name="twitter:site" content="@jwcth"/>
    <meta name="twitter:image" content="https://jwc9.jwc.in.th/img/cover.png"/>
    <meta name="twitter:creator" content="@jwcth"/>

    <!-- Open Graph data -->
    <meta property="og:title" content="Junior Webmaster Camp #9" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://jwc9.jwc.in.th" />
    <meta property="og:image" content="https://jwc9.jwc.in.th/img/cover.png" />
    <meta property="og:description" content="คว้าโอกาสแล้วเปลี่ยนเป็นสุดยอด Class Digital" />
    <meta property="og:site_name" content="Junior Webmaster Camp #9" />
    <meta property="article:published_time" content="2017-03-25T05:59:00+07:00" />
    <meta property="article:modified_time" content="2017-03-25T19:10:20+07:00" />
    <meta property="article:section" content="Article Section" />
    <meta property="article:tag" content="Article Tag" />
    <meta property="fb:admins" content="Facebook numberic ID" />

    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">-->
    @yield('style')
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
</head>
<body style="width: 100%; height: 100%">
    <div id="app" style="width: 100%; height: 100%">@yield('content')</div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-93538944-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1858557947740201'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1858557947740201&ev=PageView&noscript=1"
        /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    <script>
        fbq('track', 'Search', {
            search_string: 'leather sandals'
        });
    </script>
    <script src="{{URL('js/app.js')}}"></script>
</body>
</html>
