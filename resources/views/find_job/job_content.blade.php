@extends('layouts.app')

@section('content')


@if (!$check)        
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
@endif
<!-- jobDetails-section -->
<div class="jobDetails-section bg-default-1 pt-10 pt-lg-15 pb-xl-15 pb-7">
    <div class="container">
      <div class="row justify-content-center">
        <!-- back Button -->
        <div class="col-xl-10 col-lg-11 mt-4 ml-xxl-32 ml-xl-15 dark-mode-texts">
          <div class="mb-9">
            <a class="d-flex align-items-center ml-4" href="{{ URL::previous() }}"> <i
            class="fa fa-chevron-left bg-white circle-40 mr-5 font-size-7 text-black font-weight-bold shadow-8">
          </i><span class="text-uppercase font-size-3 font-weight-bold text-gray">Back to job list</span></a>
          </div>
        </div>
        <!-- back Button End -->
        <div class="col-xl-9 col-lg-11 mb-8 px-xxl-15 px-xl-0">
          <div class="bg-white rounded-4 border border-mercury shadow-9">
            <!-- Single Featured Job -->
            <div class="pt-9 pl-sm-9 pl-5 pr-sm-9 pr-5 pb-8 border-bottom border-width-1 border-default-color light-mode-texts">
              <div class="row">
                <div class="col-md-6">
                  <!-- media start -->
                  <div class="media align-items-center">
                    <!-- media logo start -->
                    <div class="square-72 d-block mr-8">
                      <img src="{{asset('./image/l2/png/featured-job-logo-1.png')}}" alt="">
                    </div>
                    <!-- media logo end -->
                    <!-- media texts start -->
                    <div>
                      <h3 class="font-size-6 mb-0">Product Designer</h3>
                      <span class="font-size-3 text-gray line-height-2">AirBnb</span>
                    </div>
                    <!-- media texts end -->
                  </div>
                  <!-- media end -->
                </div>
                <div class="col-md-6 text-right pt-7 pt-md-0 mt-md-n1">
                  <!-- media date start -->
                  <div class="media justify-content-md-end">
                    <p class="font-size-4 text-gray mb-0">19 June 2020</p>
                  </div>
                  <!-- media date end -->
                </div>
              </div>
              <div class="row pt-9">
                <div class="col-12">
                </div>
              </div>
            </div>
            <!-- End Single Featured Job -->
            <div class="job-details-content pt-8 pl-sm-9 pl-6 pr-sm-9 pr-6 pb-10 border-bottom border-width-1 border-default-color light-mode-texts">
              <div class="row mb-7">
                <div class="col-md-4 mb-md-0 mb-6">
                  <div class="media justify-content-md-start">
                    <div class="image mr-5">
                      <img src="{{asset('./image/svg/icon-dolor.svg')}}" alt="">
                    </div>
                    <p class="font-weight-semibold font-size-5 text-black-2 mb-0">80-90K PLN</p>
                  </div>
                </div>
                <div class="col-md-4 pr-lg-0 pl-lg-10 mb-md-0 mb-6">
                  <div class="media justify-content-md-start">
                    <div class="image mr-5">
                      <img src="{{asset('./image/svg/icon-briefcase.svg')}}" alt="">
                    </div>
                    <p class="font-weight-semibold font-size-5 text-black-2 mb-0">Full-Time</p>
                  </div>
                </div>
                <div class="col-md-4 pl-lg-0">
                  <div class="media justify-content-md-start">
                    <div class="image mr-5">
                      <img src="{{asset('./image/svg/icon-location.svg')}}" alt="">
                    </div>
                    <p class="font-size-5 text-gray mb-0">777 Brockton Avenue, <br class="d-md-none d-lg-block d-block">
                                          Abington MA 2351</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-lg-0 mb-10">
                  <div class="">
                    <span class="font-size-4 d-block mb-4 text-gray">Career Level</span>
                    <h6 class="font-size-5 text-black-2 font-weight-semibold mb-9">Project Manangement</h6>
                  </div>
                  <div class="tags">
                    <p class="font-size-4 text-gray mb-0">Soft Skill</p>
                    <ul class="list-unstyled mr-n3 mb-0">
                      <li class="d-block font-size-4 text-black-2 mt-2">
                        <span class="d-inline-block mr-2">•</span>Slack
                      </li>
                      <li class="d-block font-size-4 text-black-2 mt-2">
                        <span class="d-inline-block mr-2">•</span>Basic English
                      </li>
                      <li class="d-block font-size-4 text-black-2 mt-2">
                        <span class="d-inline-block mr-2">•</span>Well Organized
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 pr-lg-0 pl-lg-10 mb-lg-0 mb-8">
                  <div class="">
                    <span class="font-size-4 d-block mb-4 text-gray">Type of corporation</span>
                    <h6 class="font-size-5 text-black-2 font-weight-semibold mb-9">B2B & B2C</h6>
                  </div>
                  <div class="tags">
                    <p class="font-size-4 text-gray mb-3">Technical Skill</p>
                    <ul class="d-flex list-unstyled flex-wrap pr-sm-25 pr-md-0">
                      <li class="bg-regent-opacity-15 mr-3 h-px-33 text-center flex-all-center rounded-3 px-5 font-size-3 text-black-2 mt-2">
                        Editing
                      </li>
                      <li class="bg-regent-opacity-15 mr-3 h-px-33 text-center flex-all-center rounded-3 px-5 font-size-3 text-black-2 mt-2">
                        Wire-framing
                      </li>
                      <li class="bg-regent-opacity-15 mr-md-0 mr-3 h-px-33 text-center flex-all-center rounded-3 px-5 font-size-3 text-black-2 mt-2">
                        XD
                      </li>
                      <li class="bg-regent-opacity-15 mr-3 h-px-33 text-center flex-all-center rounded-3 px-5 font-size-3 text-black-2 mt-2">
                        User Persona
                      </li>
                      <li class="bg-regent-opacity-15 mr-3 h-px-33 text-center flex-all-center rounded-3 px-5 font-size-3 text-black-2 mt-2">
                        Sketch
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-4 pl-lg-0">
                  <div class="">
                    <span class="font-size-4 d-block mb-4 text-gray">Company size</span>
                    <h6 class="font-size-5 text-black-2 font-weight-semibold mb-0">11-50 employees</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="job-details-content pt-8 pl-sm-9 pl-6 pr-sm-9 pr-6 pb-10 light-mode-texts">
              <div class="row">
                <div class="col-xl-11 col-md-12 pr-xxl-9 pr-xl-10 pr-lg-20">
                    <div class="content">
                        <h1>Job Content</h1>
                    </div>
                    <div>
                        {{$jobdetail->content}}
                    </div>
                  <div class="">
                    <span class="font-size-4 font-weight-semibold text-black-2 mb-7">Your Role:</span>
                    <p class="font-size-4 text-black-2 mb-7">We’re looking for a passionate individual to design beautiful and functional products for our
                      customers at Gubagoo. We move very fast and you will be expected to contribute to a cross-functional product development squad,
                      that includes product managers and developers, to deliver the UX and UI for the team to bring to life. </p>
                    <p class="font-size-4 text-black-2 mb-7">We are serious about remote work. You can work for from anywhere. </p>
                    <form method="POST" action="{{ route('apply') }}">
                        @csrf
                            <a id = "disabled" onclick="apply()" class="btn btn-green text-uppercase btn-medium w-180 h-px-48 rounded-3 mr-4 mt-6 focus-reset" 
                            href="javacript:" data-toggle="modal" data-target="#login">Apply to this job</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
 function apply(){
     if(document.getElementById('dropdownMenuLink').roleName ='proile'){
     var count = $('span.count').html();
     count++;
     $('span.count').html(count);
     $("#disabled").addClass("disabled");
     console.log(count);
     }
 }
</script>
@endsection

