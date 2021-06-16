@extends('layouts.front')

@section('banner')

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-bx">
                    <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{$blog->en->title}} @else {{$blog->mne->title}} @endif</h1>
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
                        <img src="{{asset($blog->imagePath)}}" alt="">
                        <p>{{\Carbon\Carbon::parse($blog->created_at)->format('d-m-Y')}}</p>
                    </div>
                    <div class="details-middle">
                        <div class="details-midle-top">
                            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            <h1>{{$blog->en->title}}</h1>
                            @else
                                <h1>{{$blog->mne->title}}</h1>
                            @endif
                            @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            <p>{{$blog->en->text}}
                            </p>
                                @else
                            <p>{{$blog->mne->text}}</p>
                            @endif
                        </div>
                        @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                            @if($blog->en->quote != '')
                        <div class="details-midle-bottom">
                            <div class="details-m-b-wrapp">
                                <p>{{$blog->en->quote}}</p>
                            </div>
                        </div>
                                @endif
                            @else
                            @if($blog->mne->quote != '')
                                <div class="details-midle-bottom">
                                    <div class="details-m-b-wrapp">
                                        <p>{{$blog->mne->quote}}</p>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </div>
                    <div class="details-bottom">
                        <div class="details-share">
{{--                            <button href="#"><i class="fa fa-facebook"></i><span>Share</span></button>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--========================================
        3. CONTACT US
============================================-->

{{--    <section class="contact-index contact-blog">--}}
{{--        <div class="contact-bck-overlay"></div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="contact-wrapp">--}}
{{--                    <div class="col-sm-12 col-md-9 contact-left">--}}
{{--                        <h1>Contact us for help with your business</h1>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-md-3 contact-right">--}}
{{--                        <a href="/contact-us"><span>contact us</span></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!--========================================
        4.  RECOMMENDED BLOG
============================================-->

    <div class="recommended-blog">
        <div class="recommended-head">
            <h1>Blog</h1>
            <h2>@if(\Illuminate\Support\Facades\App::getLocale() == 'en')Recommended @else Preporučeno @endif</h2>
        </div>
        <div class="container">
            <div class="row">
                @if(sizeof($recommended) > 0)
                    @foreach($recommended as $r)
                <div class="blog-bx col-sm-12 col-md-4">
                    <div class="blog-bx-wrapp">
                        <div class="blog-left">
                            <a href="/blog/{{$r->id}}"><img src="{{asset($r->imagePath)}}" alt=""></a>
                        </div>
                        <div class="blog-right">
                            <h4><a href="/blog/{{$r->id}}">
                                    @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
                                        {{$r->en->title}}
                                        @else
                                        {{$r->mne->title}}
                                    @endif
                                </a></h4>
                            <p>{{\Carbon\Carbon::parse($r->created_at)->format('d-m-Y')}}</p>
                            <a href="/blog/{{$r->id}}" class="btn"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en')more @else više @endif </span></a>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

@endsection
