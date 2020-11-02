@extends('layouts.app')

@section('content')
<!-- Login Modal -->
<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-500 position-relative">
        <button type="button"
            class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
            data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
                    <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                        <div class="row">
                            <div class="col-4 col-xs-12">
                                <a href="{{ route('loginGoogle' )}}"
                                    class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i
                                        class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span
                                        class="d-none d-xs-block">Log in with Google</span></a>
                            </div>
                            <div class="col-4 col-xs-12">
                                <a href="{{ route('loginFacebook' )}}"
                                    class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i
                                        class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i>
                                    <span class="d-none d-xs-block">Log in with Facebook</span></a>
                            </div>
                        </div>
                        <div class="or-devider">
                            <span class="font-size-3 line-height-reset ">Or</span>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password"
                                        placeholder="Enter password" >
                                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                        data-show-pass="password"></a>
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">
                                <label for="terms-check" class="gr-check-input d-flex  mr-3">
                                    <input class="d-none form-check-input" type="checkbox" id="terms-check" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="checkbox mr-5"></span>
                                    <span for="remember" class="font-size-3 mb-0 line-height-reset mb-1 d-block">Remember
                                        password</span>
                                </label>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                            </div>
                            <div class="form-group mb-8">
                                <button type="submit" class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in
                                </button>
                            </div>
                            <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a
                                    href="" class="text-primary">Create a free account</a></p>
                        </form>
                    </div>       
            </div>
        </div>
    </div>
</div>
<!-- Sign Up Modal -->
<div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-500 position-relative">
      <button type="button" class="circle-32 btn-reset bg-white pos-abs-tr mt-n6 mr-lg-n6 focus-reset shadow-10" data-dismiss="modal"><i class="fas fa-times"></i></button>
      <div class="login-modal-main bg-white rounded-8 overflow-hidden">
        <div class="row no-gutters">
            <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
              <div class="row">
                <div class="col-4 col-xs-12">
                  <a href="{{ route('loginGoogle' )}}" class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Google</span></a>
                </div>
                <div class="col-4 col-xs-12">
                  <a href="{{ route('loginFacebook' )}}" class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span class="d-none d-xs-block">Import from Facebook</span></a>
                </div>
              </div>
              <div class="or-devider">
                <span class="font-size-3 line-height-reset">Or</span>
              </div>
              {{-- form start --}}
              <form method="POST" action="{{ route('register') }}">
                @csrf
                {{-- name --}}
                <div class="form-group">
                    <label for="name" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your name" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                {{-- email --}}
                <div class="form-group">
                  <label for="email2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                {{-- password --}}
                <div class="form-group">
                  <label for="password2" class="font-size-4 text-black-2 font-weight-semibold line-height-reset ">Password</label>
                  <div class="position-relative">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter password" name="password" required autocomplete="new-password">
                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password2"></a>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                {{-- confirm --}}
                <div class="form-group">
                  <label for="password-confirm" class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Confirm Password</label>
                  <div class="position-relative">
                    <input type="password" class="form-control" id="password-confirm" placeholder="Enter password" name="password_confirmation" required autocomplete="new-password">
                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2" data-show-pass="password23"></a>
                  </div>
                </div>
                <div class="form-group d-flex flex-wrap justify-content-between mb-1">
                  <label for="terms-check2" class="gr-check-input d-flex  mr-3">
                    <input class="d-none" type="checkbox" id="terms-check2">
                    <span class="checkbox mr-5"></span>
                    <span class="font-size-3 mb-0 line-height-reset d-block">Agree to the <a href="" class="text-primary">Terms & Conditions</a></span>
                  </label>
                  {{-- foget pass --}}
                  <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                </div>
                {{-- submit --}}
                <div class="form-group mb-8">
                  <button type="submit" class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Sign Up </button>
                </div>
                <p class="font-size-4 text-center heading-default-color">Don’t have an account? <a href="" class="text-primary">Create a free account</a></p>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>        
<!-- Hero Area -->
<!-- Main Content Start -->
<div class="bg-default-1 pt-26 pt-lg-28 pb-13 pb-lg-25">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-4 col-md-5 col-xs-8">
          <!-- Sidebar Start -->
          <div class="widgets mb-11">
            <h4 class="font-size-6 font-weight-semibold mb-6">Job Type</h4>
            <ul class="list-unstyled filter-check-list">
              <li class="mb-2"><a href="#" class="toggle-item">Full Time</a></li>
              <li class="mb-2"><a href="#" class="toggle-item">Part Time</a></li>
            </ul>
          </div>
          <div class="widgets mb-11 ">
            <div class="d-flex align-items-center pr-15 pr-xs-0 pr-md-0 pr-xl-22">
              <h4 class="font-size-6 font-weight-semibold mb-6 w-75">Salary Range</h4>
              <!-- Range Slider -->
              <div class="slider-price w-25 text-right mr-7">
                <p class="font-weight-bold">
                  <input class="text-primary font-weight-semibold font-size-4 focus-reset" type="text" id="amount" readonly="">
                </p>
              </div>
            </div>
            <div class="graph text-center mx-0 mt-5 position-relative chart-postion">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="range-slider">
              <div class="pm-range-slider"></div>
            </div>
          </div>
          <div class="widgets mb-11">
            <h4 class="font-size-6 font-weight-semibold mb-6">Experience Level </h4>
            <ul class="list-unstyled filter-check-list">
              <li class="mb-2"><a href="#" class="toggle-item">All</a></li>
              <li class="mb-2"><a href="#" class="toggle-item">Fresher</a></li>
              <li class="mb-2"><a href="#" class="toggle-item">Senior</a></li>
              <li class="mb-2"><a href="#" class="toggle-item">Junior</a></li>
            </ul>
          </div>
          <div class="widgets mb-11">
            <h4 class="font-size-6 font-weight-semibold mb-6">Posted Time</h4>
            <ul class="list-unstyled filter-check-list">
              <li class="mb-2"><a href="#" class="toggle-item">Anytime</a></li>
              <li class="mb-2"><a href="#" class="toggle-item">Last day</a></li>
              <li class="mb-2"><a href="#" class="toggle-item">Last 3 days</a></li>
              <li class="mb-2"><a href="#" class="toggle-item">Last week</a></li>
            </ul>
          </div>
          <!-- Sidebar End -->
        </div>
        <!-- Main Body -->
        <div class="col-12 col-xl-8 col-lg-8">
          <!-- form -->
          <form action="/" class="search-form">
            <div class="filter-search-form-2 search-1-adjustment bg-white rounded-sm shadow-7 pr-6 py-6 pl-6">
              <div class="filter-inputs">
                <div class="form-group position-relative w-lg-45 w-xl-40 w-xxl-45">
                  <input class="form-control focus-reset pl-13" type="text" id="keyword" placeholder="実習生">
                  <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
                  <i class="icon icon-zoom-2 text-primary font-weight-bold"></i>
                </span>
                </div>
                <!-- .select-city starts -->
                <div class="form-group position-relative w-lg-55 w-xl-60 w-xxl-55">
                  <select name="country" id="country" class="nice-select font-size-4 pl-13 h-100 arrow-3">
                    <option data-display="City">City</option>
                    <option value="">Tokyo</option>
                    <option value="">Osaka</option>
                    <option value="">Kyoto</option>
                    <option value="">Hokkaido</option>
                  </select>
                  <span class="h-100 w-px-50 pos-abs-tl d-flex align-items-center justify-content-center font-size-6">
                  <i class="icon icon-pin-3 text-primary font-weight-bold"></i>
                </span>
                </div>
                <!-- ./select-city ends -->
              </div>
              <div class="button-block">
                <button class="btn btn-primary line-height-reset h-100 btn-submit w-100 text-uppercase">Search</button>
              </div>
            </div>
          </form>
          <div class="pt-12">
            <div class="d-flex align-items-center justify-content-between mb-6">
              <h5 class="font-size-4 font-weight-normal text-gray">
                <span class="heading-default-color">120</span>
                results for <span class="heading-default-color">
                    @foreach ($jobtype as $item)       
                            {{$item->name}}
                    @endforeach
                </span>
              </h5>
              <div class="d-flex align-items-center result-view-type">
                <a class="heading-default-color pl-5 font-size-6 hover-text-hitgray active" href="./search-list-1.html">
                  <i class="fa fa-list-ul"></i>
                </a>
                <a class="heading-default-color pl-5 font-size-6 hover-text-hitgray" href="./search-grid.html">
                  <i class="fa fa-th-large"></i>
                </a>
              </div>
            </div>
            @foreach ($jobtype as $item)
            @foreach ($item->jobdetails as $jobdetail)
            <div class="mb-8">
              <!-- Single Featured Job -->
              <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="media align-items-center">
                      <div class="square-72 d-block mr-8">
                        <img src="{{asset('./image/png/featured-job-logo-1.png')}}" alt="">
                      </div>
                      <div>
                        <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="/find_job/job_content/{{$jobdetail->id}}">{{$jobdetail->name}}</a></h3>
                        <a href="#" class="font-size-3 text-default-color line-height-2">AirBnb</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 text-right pt-7 pt-md-5">
                    <div class="media justify-content-md-end">
                      <div class="image mr-5 mt-2">
                        <img src="{{asset('./image/svg/icon-fire-rounded.svg')}}" alt="">
                      </div>
                      <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span
                      class="text-black-2">80-90K</span></p>
                    </div>
                  </div>
                </div>
                <div class="row pt-8">
                  <div class="col-md-7">
                    <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                      <li>
                        <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Agile</a>
                      </li>
                      <li>
                        <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Wireframing</a>
                      </li>
                      <li>
                        <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Prototyping</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-5">
                    <ul class="d-flex list-unstyled mr-n3 flex-wrap mr-n8 justify-content-md-end">
                      <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                        <span class="mr-4" style="margin-top: -2px"><img src="{{asset('./image/svg/icon-loaction-pin-black.svg')}}" alt=""></span>
                        <span class="font-weight-semibold">Tokyo</span>
                      </li>
                      <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                        <span class="mr-4" style="margin-top: -2px"><img src="{{asset('./image/svg/icon-suitecase.svg')}}" alt=""></span>
                        <span class="font-weight-semibold">Full-time</span>
                      </li>
                      <li class="mt-2 mr-8 font-size-small text-black-2 d-flex">
                        <span class="mr-4" style="margin-top: -2px"><img src="{{asset('./image/svg/icon-clock.svg')}}" alt=""></span>
                        <span class="font-weight-semibold">9d ago</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- End Single Featured Job -->
            </div>
            @endforeach
          @endforeach
            <div class="text-center pt-5 pt-lg-13">
              <a class="text-green font-weight-bold text-uppercase font-size-3" href="#">
                Load More <i class="fas fa-sort-down ml-3"></i>
              </a>
            </div>
          </div>
          <!-- form end -->
        </div>
      </div>
    </div>
  </div>
  <!-- Main Content end -->

@endsection
