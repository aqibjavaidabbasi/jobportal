
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>@yield('title') </title>
        @include('frontend.layouts.partials.head')
        <style>
            .company-img img {
                width: 60px;
            }
        </style>
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('fontend-assets/img/logo/logo.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('frontend.layouts.partials.header')
    <main>

        @yield('content')
    </main>
    @include('frontend.layouts.partials.footer')

  <!-- JS here -->
	
    @include('frontend.layouts.partials.postjs')
    </body>
</html>



