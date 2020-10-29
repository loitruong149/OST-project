@extends('layouts.app')

@section('content')

<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button"
            class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
            data-dismiss="modal"><i class="fas fa-times"></i></button>
        <div class="login-modal-main bg-white rounded-8 overflow-hidden">
            <div class="row no-gutters">
                <h1>ban chua dang nhap</h1>
                    <div class="bg-white-2 h-100 px-11 pt-11 pb-7">
                        <div class="row">
                            <div class="col-4 col-xs-12">
                                <a href=""
                                    class="font-size-4 font-weight-semibold position-relative text-white bg-poppy h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i
                                        class="fab fa-google pos-xs-abs-cl font-size-7 ml-xs-4"></i> <span
                                        class="d-none d-xs-block">Log in with Google</span></a>
                            </div>
                            <div class="col-4 col-xs-12">
                                <a href=""
                                    class="font-size-4 font-weight-semibold position-relative text-white bg-marino h-px-48 flex-all-center w-100 px-6 rounded-5 mb-4"><i
                                        class="fab fa-facebook-square pos-xs-abs-cl font-size-7 ml-xs-4"></i>
                                    <span class="d-none d-xs-block">Log in with Facebook</span></a>
                            </div>
                        </div>
                        <div class="or-devider">
                            <span class="font-size-3 line-height-reset ">Or</span>
                        </div>
                        <form action="/">
                            <div class="form-group">
                                <label for="email"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">E-mail</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com"
                                    id="email">
                            </div>
                            <div class="form-group">
                                <label for="password"
                                    class="font-size-4 text-black-2 font-weight-semibold line-height-reset">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter password">
                                    <a href="#" class="show-password pos-abs-cr fas mr-6 text-black-2"
                                        data-show-pass="password"></a>
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">
                                <label for="terms-check" class="gr-check-input d-flex  mr-3">
                                    <input class="d-none" type="checkbox" id="terms-check">
                                    <span class="checkbox mr-5"></span>
                                    <span class="font-size-3 mb-0 line-height-reset mb-1 d-block">Remember
                                        password</span>
                                </label>
                                <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                            </div>
                            <div class="form-group mb-8">
                                <button class="btn btn-primary btn-medium w-100 rounded-5 text-uppercase">Log in
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
<div class="container" style="height: 650px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <div class="content">
                        <h1>Job Content</h1>
                    </div>
                    <div>
                        {{$jobdetail->content}}
                    </div>
                        <form method="POST" action="{{ route('apply') }}">
                            @csrf
                            <a class="btn btn-transparent text-uppercase font-size-3 heading-default-color focus-reset"
                            href="javacript:" data-toggle="modal" data-target="#login">
                            Apply
                        </a>
                        </form>
                    </div>
        </div>
    </div>
</div>

@endsection
