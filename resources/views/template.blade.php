<!DOCTYPE html>
<html lang="th" style="">
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
    <meta itemprop="description" content="Digital Web War - มหาสงครามคนดิจิตอล">
    <meta itemprop="image" content="{{URL::asset('img/cover.png')}}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:description" content="Digital Web War - มหาสงครามคนดิจิตอล"/>
    <meta name="twitter:title" content="Junior Webmaster Camp #9"/>
    <meta name="twitter:site" content="@jwcth"/>
    <meta name="twitter:image" content="https://jwc9.jwc.in.th/img/cover.png"/>
    <meta name="twitter:creator" content="@jwcth"/>

    <!-- Open Graph data -->
    <meta property="og:title" content="Junior Webmaster Camp #9" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://jwc9.jwc.in.th" />
    <meta property="og:image" content="https://jwc9.jwc.in.th/img/cover.png" />
    <meta property="og:description" content="Digital Web War - มหาสงครามคนดิจิตอล" />
    <meta property="og:site_name" content="Junior Webmaster Camp #9" />
    <meta property="article:published_time" content="2017-04-09T05:59:00+07:00" />
    <meta property="article:modified_time" content="2017-03-09T19:10:20+07:00" />
    <!--<meta property="article:section" content="Article Section" />
    <meta property="article:tag" content="Article Tag" />
    <meta property="fb:admins" content="Facebook numberic ID" />-->

    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">

    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">-->
    @yield('style')
    <script>
        window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
    </script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
    <style type="text/css">
        body, input, textarea, select, button {text-rendering: optimizeLegibility;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;-moz-font-feature-settings: "liga", "kern";}
        .btn-game{
            font-size: 48px;
            background: #ee5d5f;
            border-bottom: 10px solid #d7524e;
            border-radius: 40px;
            cursor: pointer;
            max-width: 300px;
            margin: auto;
            font-weight: bold;
        }

        .btn-game:hover{
            border-bottom: 5px solid #b74642;
            margin-top: 5px;
        }

        a.btn-game{
            color: white;
            text-decoration: none;
        }

        .btn-game.small{
            font-size: 32px;
            max-width: 200px;
            line-height: 48px;
            border-bottom: 7px solid #d7524e;
        }

        .btn-game.small:hover{
            margin-top: 4px;
            border-bottom: 3px solid #d7524e;
        }

        .btn-game.arrow{
            width: 50px;
            height: 50px;
            background: #ee5d5f;
            line-height: 45px;
            border-bottom: 5px solid #d7524e;
            display: inline-block;
            position: absolute;
            z-index: 99;
        }

        .btn-game.arrow:hover{
            margin-top: 1px;
            background: #ee5d5f;
            border-bottom: 2px solid #d7524e;
        }

        @media(max-width: 768px){
            .btn-game{
                max-width: 200px;
                font-size: 24px;
                border-bottom: 7px solid #d7524e;
            }

            .btn-game:hover{
                border-bottom: 3px solid #b74642;
                margin-top: 5px;
            }
        }
        .flatpickr-calendar {
            font-family: 'Libre Franklin', Helvetica, Arial, sans-serif
        }
        .free-flag{
            position: fixed;
            top: 0;
            left: auto;
            right: 30px;
            z-index: 999;
            width: 100px;
        }
        @media all and (max-width: 768px){
            .free-flag{
                width: 80px;
            }
        }
        .loading{
            background: black;
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 9999;
        }
        .row-sponsor-footer img.sponsor-img{
            display: inline-block;
            max-width: 100px;
            max-height: 60px;
        }

    </style>
</head>
<body style="">
    <div id="app" style="">@yield('content')</div>
    <div style="width: 100%; min-height: 60px; background: black; padding: 20px;" class="text-center">
        <div class="box-sponsor-logoList">
            <div class="row row-sponsor-footer text-center">
                <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/white/twa2.png">
                <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/vip/white/Chandrakasem.png">
                <br>
                <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/svg-white/ETDA.svg">
                <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/svg-white/CP ALL.svg">
                <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/svg-white/Tencent-White.svg">
                <img class="img-responsive sponsor-img sponsor-vip" src="/images/sponsor/svg-white/DekD.svg">
            </div>
        </div>
        <small style="color: #ccc;">Copyright &copy; {{ date('Y') }}, Young Webmaster Camp, in association with Thai Webmaster Association. All right reserved.</small>
    </div>
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
    <script src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="{{URL('js/app.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous">
  </script>-->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

</body>
</html>
