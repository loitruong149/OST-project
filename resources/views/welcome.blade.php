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
<div class="position-relative z-index-1  mt-25 mt-md-15 mt-lg-0 mt-xl-20"></div>

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

<!-- Company Area End -->
<div class="">
  <div class="container">
    <hr class="pt-13 pt-lg-20">
    <!-- Section Top -->
    <div class="row align-items-center justify-content-center">
      <!-- Section Title -->
      <div class="col-12 col-xl-6 col-lg-7 col-md-9">
        <div class="text-center mb-12 mb-lg-17">
          <h2 class="font-size-10 font-weight-bold mb-8">Explore by category</h2>
      </div>
    </div>
    <!-- End Section Top -->
    <div class="row justify-content-center" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
      <!-- Single Category -->
      <div class="col-12 col-xl-4 col-lg-4 col-sm-6 col-xs-8">
        <a href="#" class="bg-white border border-color-2 rounded-4 pl-5 pt-10 pb-3 px-2 hover-shadow-2 mb-9 d-block w-100 text-center">
          <div class="text-white bg-blue square-70 rounded-4 mb-7 font-size-7 text-center mx-auto">
            <i class="fa fa-briefcase"></i>
          </div>
          <!-- Category Content -->
          <div class="">
            <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">介護</h5>
            <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Job</p>
          </div>
        </a>
      </div>
      <!-- End Single Category -->
      <!-- Single Category -->
      <div class="col-12 col-xl-4 col-lg-4 col-sm-6 col-xs-8">
        <a href="#" class="bg-white border border-color-2 rounded-4 pl-5 pt-10 pb-3 px-2 hover-shadow-2 mb-9 d-block w-100 text-center">
          <div class="text-white bg-spray square-70 rounded-4 mb-7 font-size-7 text-center mx-auto">
            <i class="fa fa-headset"></i>
          </div>
          <!-- Category Content -->
          <div class="">
            <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">エンジニア</h5>
            <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Job</p>
          </div>
        </a>
      </div>
      <!-- End Single Category -->
      <!-- Single Category -->
      <div class="col-12 col-xl-4 col-lg-4 col-sm-6 col-xs-8">
        <a href="#" class="bg-white border border-color-2 rounded-4 pl-5 pt-10 pb-3 px-2 hover-shadow-2 mb-9 d-block w-100 text-center">
          <div class="text-white bg-coral square-70 rounded-4 mb-7 font-size-7 text-center mx-auto">
            <i class="fa fa-layer-group"></i>
          </div>
          <!-- Category Content -->
          <div class="">
            <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">特定技能</h5>
            <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Job</p>
          </div>
        </a>
      </div>
      <!-- End Single Category -->
      <!-- Single Category -->
      <div class="col-12 col-xl-4 col-lg-4 col-sm-6 col-xs-8">
        <a href="#" class="bg-white border border-color-2 rounded-4 pl-5 pt-10 pb-3 px-2 hover-shadow-2 mb-9 d-block w-100 text-center">
          <div class="text-white bg-red square-70 rounded-4 mb-7 font-size-7 text-center mx-auto">
            <i class="fa fa-pen-nib"></i>
          </div>
          <!-- Category Content -->
          <div class="">
            <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Design</h5>
            <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Job</p>
          </div>
        </a>
      </div>
      <!-- End Single Category -->
      <!-- Single Category -->
      <div class="col-12 col-xl-4 col-lg-4 col-sm-6 col-xs-8">
        <a href="#" class="bg-white border border-color-2 rounded-4 pl-5 pt-10 pb-3 px-2 hover-shadow-2 mb-9 d-block w-100 text-center">
          <div class="text-white bg-orange square-70 rounded-4 mb-7 font-size-7 text-center mx-auto">
            <i class="fa fa-rocket"></i>
          </div>
          <!-- Category Content -->
          <div class="">
            <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Marketing &amp; Management</h5>
            <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Job</p>
          </div>
        </a>
      </div>
      <!-- End Single Category -->
      <!-- Single Category -->
      <div class="col-12 col-xl-4 col-lg-4 col-sm-6 col-xs-8">
        <a href="#" class="bg-white border border-color-2 rounded-4 pl-5 pt-10 pb-3 px-2 hover-shadow-2 mb-9 d-block w-100 text-center">
          <div class="text-white bg-yellow square-70 rounded-4 mb-7 font-size-7 text-center mx-auto">
            <i class="fa fa-location-arrow"></i>
          </div>
          <!-- Category Content -->
          <div class="">
            <h5 class="font-size-5 font-weight-semibold text-black-2 line-height-1">Sales &amp; Communication</h5>
            <p class="font-size-4 font-weight-normal text-gray"><span>415</span> Job</p>
          </div>
        </a>
      </div>
      <!-- End Single Category -->
      
    </div>
    <div class="row">
      <div class="col-12">
        <div class="text-center pt-5 pt-lg-13">
          <a class="btn btn-outline-black-2 btn-lg text-uppercase" href="#">Explore All</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</section>
<!-- ContentOne Area -->
<!-- featuredJobOne Area -->
<section class="bg-athens pt-12 pt-lg-24 pb-7 pb-lg-25">
  <div class="container">
    <!-- Section Title -->
    <div class="row justify-content-center mb-lg-16 mb-11">
      <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-10 text-center">
        <h2 class="mb-6 mb-lg-7 text-black-2 font-size-10">New Jobs</h2>
      </div>
    </div>
    <!-- Section Title End -->
    <div class="row justify-content-center">
      @foreach ($job_engineer as $item)
            @foreach ($item->jobdetails as $jobdetail)
      <div class="col-xxl-9 col-xl-9 col-lg-10 mb-8" data-aos="fade-right" data-aos-duration="800" data-aos-once="true">
        <!-- Single Featured Job -->
        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3 ">
          <div class="row">
            <div class="col-md-6">
              <div class="media align-items-center">
                <div class="square-72 d-block mr-8">
                  <img src="{{asset('./image/l2/png/featured-job-logo-1.png')}}" alt="">
                </div>
                <div>
                  <h3 class="mb-0"><a class="font-size-6 heading-default-color" href="/find_job/job_content/{{$jobdetail->id}}">{{$jobdetail->name}}</a></h3>
                  <a href="#" class="font-size-3 text-default-color line-height-2">{{$item->name}}</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 text-right pt-7 pt-md-5">
              <div class="media justify-content-md-end">
                <div class="image mr-5 mt-2">
                  <img src="{{asset('./image/svg/icon-fire-rounded.svg')}}" alt="">
                </div>
                <p class="font-weight-bold font-size-7 text-hit-gray mb-0"><span
                    class="text-black-2">120-150K</span></p>
              </div>
            </div>
          </div>
          <div class="row pt-8">
            <div class="col-md-7">
              <ul class="d-flex list-unstyled mr-n3 flex-wrap">
                <li>
                  <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Visual Design</a>
                </li>
                <li>
                  <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Wireframing</a>
                </li>
                <li>
                  <a class="bg-regent-opacity-15 min-width-px-96 mr-3 text-center rounded-3 px-6 py-1 font-size-3 text-black-2 mt-2" href="#">Scrum</a>
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
    </div>
  </div>
</section>
<!-- featuredJobOne Area -->
@endsection

