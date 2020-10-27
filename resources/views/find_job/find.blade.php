@extends('layouts.app')

@section('content')
        <!-- New job -->
        <div class="bg-default-2 pt-12 pt-lg-25 pb-12 pb-lg-25">
            <div class="container">
                <!-- Section title -->
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xxl-5">
                        <div class="text-center mb-8 mb-lg-18 px-xl-9 px-xxl-7">
                            <h2 class="font-size-9 mb-6">職種</h2>
                        </div>
                    </div>
                </div>
                <!-- End Section title -->
                <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-11 mb-9">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                            <div class="media align-items-center">
                                <div class="square-52 bg-yellow-2 mr-8 rounded">
                                    <a href="#"><img src="{{asset('./image/svg/text-K.svg')}}" alt=""></a>
                                </div>
                                <div>
                                    {{-- <a href="#" class="font-size-3 text-default-color line-height-2">Job 1</a> --}}
                                    <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                        href="{{ url('/find_job/list_job') }}">実習生</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-11 mb-9">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                            <div class="media align-items-center">
                                <div class="square-52 bg-orange-2 mr-8 rounded">
                                    <a href="#"><img src="{{asset('./image/svg/icon-thunder.svg')}}" alt=""></a>
                                </div>
                                <div>
                                    {{-- <a href="#" class="font-size-3 text-default-color line-height-2">Job 2</a> --}}
                                    <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                        href="{{ url('/find_job/list_job') }}">エンジニア</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-11 mb-9">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                            <div class="media align-items-center">
                                <div class="square-52 bg-helio mr-8 rounded">
                                    <a href="#"><img src="{{asset('./image/svg/text-asios.svg')}}" alt=""></a>
                                </div>
                                <div>
                                    {{-- <a href="#" class="font-size-3 text-default-color line-height-2">Job 3</a> --}}
                                    <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                        href="{{ url('/find_job/list_job') }}">特定技能</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-11 mb-9">
                        <!-- Single Featured Job -->
                        <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                            <div class="media align-items-center">
                                <div class="square-52 bg-helio mr-8 rounded">
                                    <a href="#"><img src="{{asset('./image/svg/text-asios.svg')}}" alt=""></a>
                                </div>
                                <div>
                                    {{-- <a href="#" class="font-size-3 text-default-color line-height-2">Job 3</a> --}}
                                    <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                        href="{{ url('/find_job/list_job') }}">介護</a></h3>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Featured Job -->
                    </div>
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

@endsection
