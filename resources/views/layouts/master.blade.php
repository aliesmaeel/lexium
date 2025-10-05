<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('meta_title', 'Lexium Business Hub')</title>
        <meta name="description" content="@yield('meta_description', 'Lexium Business Hub - Dubai business setup and corporate services.')">
        <meta name="keywords" content="@yield('meta_keywords', 'Dubai business setup, free zone company, Golden Visa UAE')">
        <link rel="stylesheet" href="/css/style.css?v={{ time() }}">
        <link rel="stylesheet" href="/css/respo.css?v={{ time() }}">
        <link rel="stylesheet" href="/css/swiper-bundle.min.css?v={{ time() }}">
        <link rel="stylesheet" href="/css/aos.css?v={{ time() }}">  
    </head>
    <body>

        @yield('header')
        @yield('content')
        <a href="https://wa.me/1234567890" target="_blank" class="floating-circle">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
        </a>
        <div id="scroll-progress">
            <svg class="progress-circle" width="50" height="50">
              <circle class="bg" cx="25" cy="25" r="22"></circle>
              <circle class="progress" cx="25" cy="25" r="22"></circle>
            </svg>
            <span class="arrow">↑</span>
        </div>
        @yield('footer')
        <script src="{{asset('js/jquery-3.6.1.min.js')}}"></script>
        <script src="{{asset('js/swiper-bundle.min.js')}}"></script>
        
        <script src="{{asset('js/app.js?v=0.8')}}"></script>
        <script src="{{asset('js/aos.js')}}"></script>
        <script>
            AOS.init({
                duration: 900,
                // once: true, 
               
            });
        </script>
    </body>

</html>
