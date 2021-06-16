@extends('layouts.front')

@section('banner')
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="banner-bx">
                        <h2>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-headline-banner')}} @else {{ trans('mne.project-headline-banner') }} @endif</h2>
                        <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                @if($id == 1)
                                    {{trans('eng.project-name-banner1')}}
                                @elseif($id == 2)
                                    {{trans('eng.project-name-banner2')}}
                                @elseif($id == 3)
                                    {{trans('eng.project-name-banner3')}}
                                @elseif($id == 4)
                                    {{trans('eng.project-name-banner4')}}
                                @endif
                            @else
                                @if($id == 1)
                                    {{trans('mne.project-name-banner1')}}
                                @elseif($id == 2)
                                    {{trans('mne.project-name-banner2')}}
                                @elseif($id == 3)
                                    {{trans('mne.project-name-banner3')}}
                                @elseif($id == 4)
                                    {{trans('mne.project-name-banner4')}}
                                @endif
                            @endif</h1>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('content')

    <!--========================================
        2. BLOG DETAILS
============================================-->

    <div class="blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="details-top">
                        <img src="{{asset('assets/images/banner/main-slider-1.jpg')}}" alt="">
                    </div>
                    <div class="details-middle">
                        <div class="details-midle-top">
                            <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                    @if($id == 1)
                                        {{trans('eng.project-name-banner1')}}
                                    @elseif($id == 2)
                                        {{trans('eng.project-name-banner2')}}
                                    @elseif($id == 3)
                                        {{trans('eng.project-name-banner3')}}
                                    @elseif($id == 4)
                                        {{trans('eng.project-name-banner4')}}
                                    @endif
                                @else
                                    @if($id == 1)
                                        {{trans('mne.project-name-banner1')}}
                                    @elseif($id == 2)
                                        {{trans('mne.project-name-banner2')}}
                                    @elseif($id == 3)
                                        {{trans('mne.project-name-banner3')}}
                                    @elseif($id == 4)
                                        {{trans('mne.project-name-banner4')}}
                                    @endif
                                @endif</h1>
                            <p>
                                @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                    @if($id == 1)
                                        {{trans('eng.project-description1')}}
                                    @elseif($id == 2)
                                        {{trans('eng.project-description2')}}
                                    @elseif($id == 3)
                                        {{trans('eng.project-description3')}}
                                    @elseif($id == 4)
                                        {{trans('eng.project-description4')}}
                                    @endif
                                @else
                                    @if($id == 1)
                                        {{trans('mne.project-description1')}}
                                    @elseif($id == 2)
                                        {{trans('mne.project-description2')}}
                                    @elseif($id == 3)
                                        {{trans('mne.project-description3')}}
                                    @elseif($id == 4)
                                        {{trans('mne.project-description4')}}
                                    @endif
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="details-bottom">
                        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            @if($id == 4)
                                <h2>{{trans('eng.project-red-subheadline-1')}}</h2>
                                <p>{{ trans('eng.project-red-subheadline-description-1') }}
                                </p>

                                <h2>{{trans('eng.project-red-subheadline-2')}}</h2>
                                <p>{{ trans('eng.project-red-subheadline-description-2') }}
                                </p>
                                @endif
                        @else
                            @if($id == 4)
                                <h2>{{trans('mne.project-red-subheadline-1')}}</h2>
                                <p>{{ trans('mne.project-red-subheadline-description-1') }}</p>

                                <h2>{{trans('mne.project-red-subheadline-2')}}</h2>
                                <p>{{ trans('mne.project-red-subheadline-description-2') }}
                                </p>
                                @endif
                        @endif
                        @if($id == 3)
                                <div class="details-share">
{{--                                    <button><img src="{{asset('assets/images/icons/facebook-logo.png')}}" alt=""><span>Share</span></button>--}}
                                    <a href="{{url('http://hassa.me')}}" target="_blank"><img src="{{asset('assets/images/icons/domain.png')}}" alt=""><span>Website</span></a>
                                </div>
                            @endif
                            @if($id == 4)
                                <div class="details-share">
                                    {{--                                    <button><img src="{{asset('assets/images/icons/facebook-logo.png')}}" alt=""><span>Share</span></button>--}}
                                    <a href="{{url('http://novemtech.me')}}" target="_blank"><img src="{{asset('assets/images/icons/domain.png')}}" alt=""><span>Website</span></a>
                                </div>
                            @endif

                    </div>
                </div>
            </div>
            <div class="row">

                    @if($id == 1)
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/p1.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/p3.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/p4.jpg')}}" class="w-100" alt="">
                    </div>
                    @elseif($id == 2)
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/hsb1.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/hsb2.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/hsb3.jpg')}}" class="w-100" alt="">
                    </div>
                    @elseif($id == 3)
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/hassa1.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/hassa2.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/hassa3.jpg')}}" class="w-100" alt="">
                    </div>
                    @elseif($id == 4)
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/novem1.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/novem2.jpg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">
                        <img src="{{asset('assets/images/projects/novem3.jpg')}}" class="w-100" alt="">
                    </div>
                    @endif

{{--                <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">--}}
{{--                    <img src="{{asset('assets/images/projects/hsb1.jpg')}}" class="w-100" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">--}}
{{--                    <img src="{{asset('assets/images/projects/hsb2.jpg')}}" class="w-100" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-sm-12 col-md-12 col-lg-4 proj-img-bx">--}}
{{--                    <img src="{{asset('assets/images/projects/hsb3.jpg')}}" class="w-100" alt="">--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <!--========================================
        3. CONTACT US
============================================-->

{{--    <section class="contact-index contact-project">--}}
{{--        <div class="contact-bck-overlay"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="contact-wrapp">--}}
{{--                    <div class="col-sm-12 col-md-9 contact-left">--}}
{{--                        <h1>Contact us for help with your business</h1>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-md-3 contact-right">--}}
{{--                        <a href="contact.html"><span>contact us</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <!--========================================--}}
{{--        4.  RECOMMENDED BLOG--}}
{{--============================================-->--}}

    <div class="recommended-blog">
        <div class="recommended-head">
            <h1>Projects</h1>
            <h2>Recommended</h2>
        </div>
        <div class="container">
            <div class="row">
                @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                    @for($i = 1; $i < 5; $i++)
                        @if($i != $id)
                            <div class="blog-bx col-sm-12 col-md-4">
                                <div class="blog-bx-wrapp">
                                    <div class="blog-left">
                                        <a href=""><img src="{{asset('assets/images/banner/main-slider-1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="blog-right">
                                        <h4><a href="/project/{{$i}}">{{trans('mne.project-name' . $i)}}</a></h4>
                                        <a href="/project/{{$i}}" class="btn"><span>more</span></a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endfor
                @else
                    @for($i = 1; $i < 5; $i++)
                        @if($i != $id)
                            <div class="blog-bx col-sm-12 col-md-4">
                                <div class="blog-bx-wrapp">
                                    <div class="blog-left">
                                        <a href=""><img src="{{asset('assets/images/banner/main-slider-1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="blog-right">
                                        <h4><a href="/project/{{$i}}">{{trans('mne.project-name' . $i)}}</a></h4>
                                        <a href="/project/{{$i}}" class="btn"><span>više</span></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                @endif
            </div>
        </div>
    </div>

 @endsection
