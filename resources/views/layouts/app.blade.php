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
    <div id="app">
        {{-- import body --}}
        <div class="site-wrapper overflow-hidden ">
            <!-- Header start  -->
            <header
                class="site-header site-header--menu-right dynamic-sticky-bg py-7 py-lg-0 site-header--absolute site-header--sticky">
                <div class="container">
                    <nav class="navbar site-navbar offcanvas-active navbar-expand-lg  px-0 py-0">
                        <!-- Brand Logo-->
                        <div class="brand-logo">
                            <a href="{{ route('homepage') }}">
                                <h1>OST</h1>
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="mobile-menu">
                            <div class="navbar-nav-wrapper">
                                <ul class="navbar-nav main-menu">
                                    <li class="nav-item dropdown active">
                                        <a class="nav-link dropdown-toggle gr-toggle-arrow" id="navbarDropdown" href="{{ route('homepage') }}"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
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


                                            @foreach ($header as $item)
                                            <li class="drop-menu-item">
                                                <a href="/find_job/list_job/{{$item->id}}">
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
                        @if ($check)         
                        {{-- da dang nhap --}}
                        <div class="header-btn-devider ml-auto ml-lg-5 pl-2 d-none d-xs-flex align-items-center">
                            <div>
                              <a href="#" class="px-3 ml-7 font-size-7 notification-block flex-y-center position-relative">
                                <i class="fas fa-bell heading-default-color"></i>
                                <span class="font-size-3 count font-weight-semibold text-white bg-primary circle-24 border border-width-3 border border-white">0</span>
                              </a>
                            </div>
                            <div>
                              <div class="dropdown show-gr-dropdown py-5">
                                <a class="proile media ml-7 flex-y-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <div class="circle-40">
                                    <img src="{{asset('./image/header-profile.png')}}" alt="">
                                  </div>
                                  <i class="fas fa-chevron-down heading-default-color ml-6"></i>
                                </a>
                                <div class="dropdown-menu gr-menu-dropdown dropdown-right border-0 border-width-2 py-2 w-auto bg-default" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="dashboard-settings.html">Settings </a>
                                  <a class="dropdown-item py-2 font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="candidate-profile-main.html">Edit Profile</a>
                                  {{-- <a class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase" href="#">Log Out</a> --}}
                                  
                                  <a href="{{ route('logout') }}" class="dropdown-item py-2 text-red font-size-3 font-weight-semibold line-height-1p2 text-uppercase" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                                  <form id="logout-form" style="display: none;" action="{{ route('logout') }}" method="POST">
                                    <button type="submit" class="btn btn-primary">
                                        @csrf
                                    </button>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        @else
                        {{-- chua dang nhap --}}
                        <div class="header-btns header-btn-devider ml-auto pr-2 ml-lg-6 d-none d-xs-flex">
                            <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset"
                            href="javacript:" data-toggle="modal" data-target="#login">
                                Log in
                            </a>
                            <a class="btn btn-primary text-uppercase font-size-3" href="javacript:" data-toggle="modal"
                                data-target="#signup">
                                Sign up
                            </a>
                        </div>
                        @endif
                        <!-- Mobile Menu Hamburger-->
                        {{-- <button class="navbar-toggler btn-close-off-canvas  hamburger-icon border-0" type="button"
                            data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="icon icon-simple-remove icon-close"></i> 
                            <span class="hamburger hamburger--squeeze js-hamburger">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </span>
                        </button> --}}
                        <!--/.Mobile Menu Hamburger Ends-->
                    </nav>
                </div>
                  </header>
            <!-- Header start end -->

            <!-- Hero Area -->
            <div class="position-relative z-index-1  mt-25 mt-md-15 mt-lg-0 mt-xl-22"></div>
          <main class="py-4">
              @yield('content')
          </main>
        <!-- footer area function -->
        <footer class="footer bg-ebony-clay dark-mode-texts">
            <div class="container  pt-12 pt-lg-19 pb-10 pb-lg-19">
                <div class="row">
                  <div class="col-lg-4 col-sm-6 mb-lg-0 mb-9">
                    <!-- footer logo start -->
                    <h1>OST </h1>
                    {{-- <img src="image/logo-main-white.png" alt="" class="footer-logo mb-14"> --}}
                    <!-- footer logo End -->
                    <!-- media start -->
                    <div class="media mb-11">
                      <img src="{{asset('image/l1/png/message.png')}}" class="align-self-center mr-3" alt="">
                      <div class="media-body pl-5">
                        <p class="mb-0 font-size-4 text-white">Contact us at</p>
                        <a class="mb-0 font-size-4 font-weight-bold" href="#">support@ostechnology.com</a>
                      </div>
                    </div>
                    <!-- media start -->
                    <!-- widget social icon start -->
                    <div class="social-icons">
                      <ul class="pl-0 list-unstyled d-flex align-items-end ">
                        <li class="d-flex flex-column justify-content-center px-3 mr-3 font-size-4 heading-default-color">Follow us on:</li>
                        <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-facebook-f font-size-3 pt-2"></i></a></li>
                        <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-twitter font-size-3 pt-2"></i></a></li>
                        <li class="d-flex flex-column justify-content-center px-3 mr-3"><a href="#" class="hover-color-primary heading-default-color"><i class="fab fa-linkedin-in font-size-3 pt-2"></i></a></li>
                      </ul>
                    </div>
                    <!-- widget social icon end -->
                  </div>
                  <div class="col-lg-8 col-md-6">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget2 mb-md-0 mb-13">
                          <!-- footer widget title start -->
                          <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">About</p>
                          <!-- footer widget title end -->
                          <!-- widget social menu start -->
                          {{-- <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">About us</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Contact us</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Careers</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Press</a></li>
                          </ul> --}}
                          <!-- widget social menu end -->
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget3 mb-sm-0 mb-13">
                          <!-- footer widget title start -->
                          <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Contact us</p>
                          <!-- footer widget title end -->
                          <!-- widget social menu start -->
                          {{-- <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Features </a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Pricing</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">News</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Help desk</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Support</a></li>
                          </ul> --}}
                          <!-- widget social menu end -->
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget4 mb-sm-0 mb-13">
                          <!-- footer widget title start -->
                          <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Services</p>
                          <!-- footer widget title end -->
                          <!-- widget social menu start -->
                          {{-- <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Digital Marketing</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">SEO for Business</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Avasta Dash</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">UI Design</a></li>
                          </ul> --}}
                          <!-- widget social menu end -->
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-3 col-xs-6">
                        <div class="footer-widget widget4">
                          <!-- footer widget title start -->
                          <p class="widget-title font-size-4 text-gray mb-md-8 mb-7">Legal</p>
                          <!-- footer widget title end -->
                          {{-- <ul class="widget-links pl-0 list-unstyled list-hover-primary">
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Privacy Policy</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Terms & Conditions</a></li>
                            <li class="mb-6"><a class="heading-default-color font-size-4 font-weight-normal" href="">Return Policy</a></li>
                          </ul> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            {{-- <div class="container  pt-12 pt-lg-19 pb-10 pb-lg-19">
                <div class="row">
                    <h1>OST Company</h1>
                </div>
            </div> --}}
        </footer>
        <!-- footer area function end -->
      <a class="on_top" href="#top" style="display: block;"><i class="fa-arrow-circle-up fa"></i></a>
      </div>
    </div>
    <script>
      $(document).ready(function(){
          $(window).scroll(function(){
              if ($(this).scrollTop() > 300) {
                  $('#on_top').fadeIn();
              } else {
                  $('#on_top').fadeOut();
              }
          });
          $('#on_top').click(function(){
              $("html, body").animate({ scrollTop: 0 }, 600);
              return false;
          });
      });
    </script>
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
    <script src="{{ asset('js/drag-n-drop.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
<style>
  a.on_top { opacity:0.6; display: none;}
a.on_top:hover{
background-color: #00b074;
color: #fff;
border: 1px solid #00b074;
opacity:1;
}
a.on_top i{ font-size: 20px;}
a.on_top {
border-radius: 6px;
background-color: #333333;
padding: 10px 20px;
white-space: nowrap; color: #fff;
position: fixed;
bottom: 75px;
right: 30px;
height: 44px;
}
</style>
</html>
