<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico')}}"/>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet"/>

    <link href="{{ asset('assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    @yield('styles')
    
    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 140px)!important;
        }

    </style>    
    
</head>
<body class="sidebar-noneoverflow">

    @include('layouts.nav_vertical_no_auth')

    <div id="app">
        
        <!--  BEGIN MAIN CONTAINER  -->
        <div class="mt-5" >

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN CONTENT PART  -->
            <!--  <div id="content" class="main-content">  -->

            <div id="" class="mt-5">

                <div class="layout-px-spacing">
                    <div class="row layout-top-spacing">
                    
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                            @yield('content')
                        </div>
                    </div>
                </div>

                <div class="footer-wrapper">
                    <div class="footer-section f-section-1">
                        <p class="">Intercom {{ date('Y') }}</p>
                    </div>

                    <div class="footer-section f-section-2">
                        <p class=""> Um sistema de <a href="http://kirc.com.br">KIRC</a> - Digitalize sua Ideia </p><br>
                        <p></p>
                    </div>
                </div>
                    
            </div>
            <!-- END MAIN CONTAINER -->
        </div>

    </div>
           
    <script src="{{ url('/js/app.js') }}"></script>
    <script src="{{ asset('/js/common.min.js') }}" ></script>
    @yield('scripts')
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BRQSX4RELW"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-BRQSX4RELW');
    </script>

</body>
</html>