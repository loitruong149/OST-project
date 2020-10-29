<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- import header --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>OST</title>
        <link rel="shortcut icon" href="{{ asset('image/favicon.png" type="image/x-icon') }}">
        <!-- Bootstrap , fonts & icons  -->
        <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/icon-font/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/typography-font/typo.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome-5/css/all.css') }}">
        <!-- Plugin'stylesheets  -->
        <link rel="stylesheet" href="{{ asset('plugins/aos/aos.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/nice-select/nice-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/slick/slick.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/ui-range-slider/jquery-ui.css') }}">
        <!-- Vendor stylesheets  -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Custom stylesheet -->
    </head>
    <body>
        {{-- import body --}}
        <div class="site-wrapper overflow-hidden ">
            <!-- Header start  -->
            <header
                class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
                <div class="container">
                    <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
                        <!-- Brand Logo-->
                        <div class="brand-logo">
                            <a href="{{route('homepage')}}">
                                    <h1>OST</h1>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="mobile-menu">
                            <div class="navbar-nav-wrapper">
                                <ul class="navbar-nav main-menu">
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="{{route('homepage')}}"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Home </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2"
                                            href="#features" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Language <i class="fa fa-chevron-down"></i></a>
                                        <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <li class="drop-menu-item">
                                                <a href="{{ url('/find') }}">
                                                    English
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="{{ url('/find') }}">
                                                    Tiếng Việt
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="{{ url('/find') }}">
                                                    日本語
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2"
                                            href="#features" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            お仕事探し <i class="fa fa-chevron-down"></i></a>
                                        <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                            @foreach ($jobtype as $item)
                                            <li class="drop-menu-item">
                                                <a href="find_job/list_job/{{$item->id}}">
                                                    {{$item->name}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown2"
                                            href="#features" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            ご求人探し <i class="fa fa-chevron-down"></i></a>
                                        <ul class="gr-menu-dropdown dropdown-menu" aria-labelledby="navbarDropdown2">
                                            <li class="drop-menu-item">
                                                <a href="{{url('find_engineer/find')}}">
                                                    実習生
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="{{url('find_engineer/find')}}">
                                                    エンジニア
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="{{url('find_engineer/find')}}">
                                                    特定技能
                                                </a>
                                            </li>
                                            <li class="drop-menu-item">
                                                <a href="{{url('find_engineer/find')}}">
                                                    介護
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <button class="d-block d-lg-none offcanvas-btn-close focus-reset" type="button"
                                data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                                aria-expanded="true" aria-label="Toggle navigation">
                                <i class="gr-cross-icon"></i>
                            </button>
                        </div>
                        <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                            <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset"
                            href="{{ route('login') }}" data-target="#login">
                                Log in
                            </a>
                            <a class="btn btn-primary text-uppercase font-size-3" href="{{ route('register') }}"
                                data-target="#signup">
                                Sign up
                            </a>
                        </div>
                    </nav>
                </div>
            </header>
    
            
            <!-- Hero Area -->
            <div class="position-relative z-index-1  mt-25 mt-md-15 mt-lg-0 mt-xl-22"></div>
    
            <!-- Gioi thieu ve trang web -->
            <div class="pt-11 pt-lg-20 pb-7 pb-lg-18">
                <div class="container">
                    <!-- Section title -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-5">
                            <div class="text-center mb-8 mb-lg-18 px-xl-9 px-xxl-7">
                                <h2 class="font-size-9 mb-6">Finding a job is<br class="d-none d-sm-block"> EASY
                                </h2>
                                <p class="font-size-4 text-default-color px-xs-9 px-md-0">
                                    Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Section title -->
                    <!-- 3 ngon ngu -->
                    <!-- Services Content -->
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                        <!-- Single Services -->
                        <div class="col-12 col-lg-4 col-md-6 col-sm-8 col-xs-8">
                            <div class="px-xl-7 px-xxl-12 pt-5 pb-3 pb-lg-9 text-center">
                                <div
                                    class="square-92 rounded-4 bg-dodger text-white font-size-8 mx-auto shadow-dodger mb-11">
                                    <img src="{{asset('image/svg/shoot.svg')}}" alt="a">
                                </div>
                                <div class="services-content">
                                    <h3 class="font-size-6 mb-7"><a href="{{ url('/find') }}">
                                        English
                                    </a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Services -->
                        <!-- Single Services -->
                        <div class="col-12 col-lg-4 col-md-6 col-sm-8 col-xs-8">
                            <div class="px-xl-7 px-xxl-12 pt-5 pb-3 pb-lg-9 text-center">
                                <div class="square-92 rounded-4 bg-green text-white font-size-8 mx-auto shadow-green mb-11">
                                    <img src="./image/svg/user.svg" alt="a">
                                </div>
                                <div class="services-content">
                                    <h3 class="font-size-6 mb-7"><a href="{{ url('/find') }}">
                                        Tiếng Việt
                                    </a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Services -->
                        <!-- Single Services -->
                        <div class="col-12 col-lg-4 col-md-6 col-sm-8 col-xs-8">
                            <div class="px-xl-7 px-xxl-12 pt-5 pb-3 pb-lg-9 text-center">
                                <div
                                    class="square-92 rounded-4 bg-casablanca text-white font-size-8 mx-auto shadow-casablanca mb-11">
                                    <img src="./image/svg/heart.svg" alt="a">
                                </div>
                                <div class="services-content">
                                    <h3 class="font-size-6 mb-7"><a href="{{ url('/find') }}">
                                        日本語
                                    </a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Services -->
                    </div>
                    <!-- End Services Content -->
                </div>
            </div>
            
            <!-- New job -->
            <div class="bg-default-2 pt-12 pt-lg-25 pb-12 pb-lg-25">
                <div class="container">
                    <!-- Section title -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8 col-lg-6 col-xxl-5">
                            <div class="text-center mb-8 mb-lg-18 px-xl-9 px-xxl-7">
                                <h2 class="font-size-9 mb-6">
                                    @foreach ($job_engineer as $item)
                                    {{strtoupper($item->name)}} Job</h2>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                    <!-- End Section title -->
                    <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">                    
                        
                        @foreach ($job_engineer as $item)
                        @foreach ($item->jobdetails as $jobdetail)
                        
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-11 mb-9">
                            <!-- Single Featured Job -->
                            <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                                <div class="media align-items-center">
                                    <div class="square-52 bg-yellow-2 mr-8 rounded">
                                        <a href="#"><img src="./image/svg/text-K.svg" alt=""></a>
                                    </div>
                                    <div>
                                        <a href="#" class="font-size-3 text-default-color line-height-2">Job 1</a>
                                        <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                        href="#">{{$jobdetail->name}}</a></h3>
                                        </div>
                                    </div>
                                    <div class="d-flex pt-17">
                                        <ul class="list-unstyled mb-1 d-flex flex-wrap">
                                            <li>
                                                <a href="#"
                                                class="bg-regent-opacity-15 text-denim font-size-3 rounded-3 min-width-px-100 px-3 flex-all-center mr-6 h-px-33 mt-4">
                                                <i class="icon icon-pin-3 mr-2 font-weight-bold"></i> Tokyo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                            class="bg-regent-opacity-15 text-orange font-size-3 rounded-3 min-width-px-100 px-3 flex-all-center mr-6 h-px-33 mt-4">
                                            <i class="fa fa-briefcase mr-2 font-weight-bold"></i> Full-time
                                        </a>
                                    </li>
                                </ul>
                                <a href="javascript:"
                                class="bookmark-button toggle-item font-size-6 ml-auto line-height-reset px-0 mt-6 text-default-color  ">
                            </a>
                        </div>
                    </div>
                    <!-- End Single Featured Job -->
                </div>
                @endforeach
                @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 text-center pt-md-11 ">
                            <a class="text-green font-weight-bold text-uppercase font-size-3" href="#">See more
                                <i class="fas fa-arrow-right ml-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    
    
            <footer class="footer bg-ebony-clay dark-mode-texts">
                <div class="container  pt-12 pt-lg-19 pb-10 pb-lg-19">
                    <div class="row">
                        <h1>OST Company</h1>
                    </div>
                </div>
            </footer>
            <!-- footer area function end -->
        </div>
        <!-- Vendor Scripts -->
        <script src="{{ asset('js/vendor.min.js') }}"></script>
        `
        <!-- Plugin's Scripts -->
        <script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('plugins/nice-select/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('plugins/aos/aos.min.js') }}"></script>
        <script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('plugins/counter-up/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('plugins/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('plugins/ui-range-slider/jquery-ui.js') }}"></script>
        <!-- Activation Script -->
        <script src="{{asset('js/drag-n-drop.js')}}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
