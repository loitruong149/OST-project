@extends('layouts.app')

@section('content')

<!-- New job -->
<div class="bg-default-2 pt-12 pt-lg-25 pb-12 pb-lg-25">
    <div class="container">
        <!-- Section title -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-5">
                <div class="text-center mb-8 mb-lg-18 px-xl-9 px-xxl-7">
                    <h2 class="font-size-9 mb-6">
                        @foreach ($jobtype as $item)       
                                {{$item->name}}の仕事
                        @endforeach
                    </h2>
                </div>
            </div>
        </div>
        <!-- End Section title -->
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
            @foreach ($jobtype as $item)
            @foreach ($item->jobdetails as $jobdetail)
                
                   
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-11 mb-9">
                <!-- Single Featured Job -->
                <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                    <div class="media align-items-center">
                        <div class="square-52 bg-yellow-2 mr-8 rounded">
                            <a href="#"><img src="{{asset('./image/svg/text-K.svg')}}" alt=""></a>
                        </div>
                        <div>
                        <a href="#" class="font-size-3 text-default-color line-height-2">Job {{$jobdetail->id}}</a>
                            <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                href="/find_job/job_content/{{$jobdetail->id}}">{{$jobdetail->name}}</a></h3>
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
            {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-11 mb-9">
                <!-- Single Featured Job -->
                <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                    <div class="media align-items-center">
                        <div class="square-52 bg-yellow-2 mr-8 rounded">
                            <a href="#"><img src="{{asset('./image/svg/text-K.svg')}}" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="font-size-3 text-default-color line-height-2">Job 1</a>
                            <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                href="{{ url('/find_job/job_content') }}">農業</a></h3>
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
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-11 mb-9">
                <!-- Single Featured Job -->
                <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                    <div class="media align-items-center">
                        <div class="square-52 bg-yellow-2 mr-8 rounded">
                            <a href="#"><img src="{{asset('./image/svg/text-K.svg')}}" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="font-size-3 text-default-color line-height-2">Job 1</a>
                            <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                href="{{ url('/find_job/job_content') }}">農業</a></h3>
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
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-11 mb-9">
                <!-- Single Featured Job -->
                <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                    <div class="media align-items-center">
                        <div class="square-52 bg-yellow-2 mr-8 rounded">
                            <a href="#"><img src="{{asset('./image/svg/text-K.svg')}}" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="font-size-3 text-default-color line-height-2">Job 1</a>
                            <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                href="{{ url('/find_job/job_content') }}">農業</a></h3>
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
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-11 mb-9">
                <!-- Single Featured Job -->
                <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                    <div class="media align-items-center">
                        <div class="square-52 bg-yellow-2 mr-8 rounded">
                            <a href="#"><img src="{{asset('./image/svg/text-K.svg')}}" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="font-size-3 text-default-color line-height-2">Job 1</a>
                            <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                href="{{ url('/find_job/job_content') }}">農業</a></h3>
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
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-11 mb-9">
                <!-- Single Featured Job -->
                <div class="pt-9 px-xl-9 px-lg-7 px-7 pb-7 light-mode-texts bg-white rounded hover-shadow-3">
                    <div class="media align-items-center">
                        <div class="square-52 bg-yellow-2 mr-8 rounded">
                            <a href="#"><img src="{{asset('./image/svg/text-K.svg')}}" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="font-size-3 text-default-color line-height-2">Job 1</a>
                            <h3 class="font-size-6 mb-0"><a class="heading-default-color font-weight-semibold"
                                href="{{ url('/find_job/job_content') }}">農業</a></h3>
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
            </div> --}}
            
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
