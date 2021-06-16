@extends('layouts.front')

@section('banner')

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-bx">
                    <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en')Full solution for investing, business and living in Montenegro @else {{ trans('mne.banner-headline') }} @endif</h1>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

<!--========================================
        2. ABOUT US
============================================-->

    <section class="about-us">
        <div class="container">
            <div class="row">
                <!-- Collapse 1 -->
                <div class="about-top">
                    <div class="about-top-left">
                        <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.about-us-headline') }} @else {{ trans('mne.about-us-headline') }} @endif</h1>
                        <p class="pt-3">@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{ trans('eng.about-us-description') }} @else {{trans('mne.about-us-description')}} @endif
                        </p>
                    </div>
                    <div class="about-top-right">
                        <img src="{{asset('assets/images/banner/main-slider-1.jpg')}}" alt="Montenegros-one-about">
                    </div>
                </div>
                <div class="about-bottom">
                    <div class="about-bottom-left">
                        <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.goals-subheadline')}} @else {{trans('mne.goals-subheadline')}} @endif</h1>
                        <h3>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.goals-headline')}} @else {{trans('mne.goals-headline')}} @endif</h3>
                    </div>
                    <div class="about-bottom-right">
                        <ul>
                            <li class="ab-r-1">
                                <div class="ab-b-2">
                                    <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.goals')}} @else {{trans('mne.goals')}} @endif</h4>
                                    <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.goals-description')}} @else {{trans('mne.goals-description')}} @endif</p>
                                </div>
                            </li>
                            <li class="ab-r-2">
                                <div class="ab-b-2">
                                    <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.plans')}} @else {{trans('mne.plans')}} @endif</h4>
                                    <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.plans-description')}} @else {{trans('mne.plans-description')}} @endif</p>
                                </div>
                            </li>
                            <li class="ab-r-3">
                                <div class="ab-b-2">
                                    <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.actions')}} @else {{trans('mne.actions')}} @endif</h4>
                                    <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.actions-description')}} @else {{trans('mne.actions-description')}} @endif</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--========================================
        3. MONTENEGRO POSSIBILITY
============================================-->

{{--    <section class="mne-possibility">--}}
{{--        <div class="container">--}}
{{--            <div class="mne-main">--}}
{{--                <div class="mne-wrapp">--}}
{{--                    <img src="{{asset('assets/images/icons/quotation-mark.png')}}" alt="">--}}
{{--                    <div class="mne-bx col-12">--}}
{{--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sequi mollitia expedita--}}
{{--                            totam sed provident. Praesentium, iure architecto. Nesciunt deserunt architecto--}}
{{--                            similique alias ratione nemo ab cupiditate autem illo quos.</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{asset('assets/images/icons/quotation-mark2.png')}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="mne-wrapp">--}}
{{--                    <img src="{{asset('assets/images/icons/quotation-mark.png')}}" alt="">--}}
{{--                    <div class="mne-bx col-12">--}}
{{--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sequi mollitia expedita--}}
{{--                            totam sed provident. Praesentium, iure architecto. Nesciunt deserunt architecto--}}
{{--                            similique alias ratione nemo ab cupiditate autem illo quos.</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{asset('assets/images/icons/quotation-mark2.png')}}" alt="">--}}
{{--                </div>--}}
{{--                <div class="mne-wrapp">--}}
{{--                    <img src="{{asset('assets/images/icons/quotation-mark.png')}}" alt="">--}}
{{--                    <div class="mne-bx col-12">--}}
{{--                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci sequi mollitia expedita--}}
{{--                            totam sed provident. Praesentium, iure architecto. Nesciunt deserunt architecto--}}
{{--                            similique alias ratione nemo ab cupiditate autem illo quos.</p>--}}
{{--                    </div>--}}
{{--                    <img src="{{asset('assets/images/icons/quotation-mark2.png')}}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

<!--========================================
        5. SERVICES
============================================-->

<section class="services">
        <img src="assets/images/logo2.png" alt="">
        <div class="logo-overlay"></div>
        <div class="services-head">
            <h1>We Provide</h1>
            <h2>Services</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/images/icons/investment2.png" alt="">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-1-headline')}} @else {{trans('mne.service-box-1-headline')}} @endif</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-1-description')}} @else {{trans('mne.service-box-1-description')}} @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/images/icons/business.png" alt="">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-2-headline')}} @else {{trans('mne.service-box-2-headline')}} @endif</h4>
                        </div>
                        <div class="flip-card-back">
                        <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-2-description')}} @else {{trans('mne.service-box-2-description')}} @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="assets/images/icons/architecture.png" alt="">
                                <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-3-headline')}} @else {{trans('mne.service-box-3-headline')}} @endif</h4>
                            </div>
                            <div class="flip-card-back">
                            <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-3-description')}} @else {{trans('mne.service-box-3-description')}} @endif</p>
                            </div>
                        </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/images/icons/software.png" alt="">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-4-headline')}} @else {{trans('mne.service-box-4-headline')}} @endif</h4>
                        </div>
                        <div class="flip-card-back">
                        <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-4-description')}} @else {{trans('mne.service-box-4-description')}} @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/images/icons/horeca.png" alt="">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-5-headline')}} @else {{trans('mne.service-box-5-headline')}} @endif</h4>
                        </div>
                        <div class="flip-card-back">
                        <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-5-description')}} @else {{trans('mne.service-box-5-description')}} @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="assets/images/icons/montehub.png" alt="">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-6-headline')}} @else {{trans('mne.service-box-6-headline')}} @endif</h4>
                        </div>
                        <div class="flip-card-back">
                        <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.service-box-6-description')}} @else {{trans('mne.service-box-6-description')}} @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--========================================
        4. CONTACT US
============================================-->

    <section class="contact-index contact-index1">
        <div class="contact-bck-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="contact-wrapp">
                    <div class="col-sm-12 col-md-9 contact-left">
                        <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-us-headline')}} @else {{trans('mne.contact-us-headline')}} @endif</h1>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="contactEmail" aria-describedby="emailHelp"
                                    placeholder="@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-us-email-placeholder')}} @else {{trans('mne.contact-us-email-placeholder')}} @endif">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contactSubject" aria-describedby="emailHelp"
                                    placeholder="@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-us-subject-placeholder')}} @else {{trans('mne.contact-us-subject-placeholder')}} @endif">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="contactQuestion" aria-describedby="emailHelp"
                                    placeholder="@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-us-question-placeholder')}} @else {{trans('mne.contact-us-question-placeholder')}} @endif">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-3 contact-right">
                        <button type="button" onclick="sendContactQuestionEmail()"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-us-button')}} @else {{trans('mne.contact-us-button')}} @endif</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-index contact-index2">
        <div class="contact-bck-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="contact-wrapp">
                    <div class="col-sm-12 col-md-9 contact-left">
                        <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-us-headline')}} @else {{trans('mne.contact-us-headline')}} @endif</h1>
                    </div>
                    <div class="col-sm-12 col-md-3 contact-right">
                        <a href="/contact-us"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-us-button')}} @else {{trans('mne.contact-us-button')}} @endif</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--========================================
        5. PROJECTS
============================================-->

    <section class="projects">
        <div class="projects-head">
            <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.our-projects-headline-h1')}} @else {{trans('mne.our-projects-headline-h1')}} @endif</h1>
            <h2>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.our-projects-headline-h2')}} @else {{trans('mne.our-projects-headline-h2')}} @endif</h2>
        </div>
        <div class="project-row">
            <div class="project-bx">
                <div class="project-bx-bck-overlay"></div>
                <div class="project-bx-hidden">
                    <div class="project-bx-hidd-wrapp">
                        <h3>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-1-headline')}} @else {{trans('mne.project-box-1-headline')}} @endif</h3>
                        <a href="/project/1"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-button')}} @else {{trans('mne.project-box-button')}} @endif</span></a>
                    </div>
                </div>
            </div>
            <div class="project-bx">
                <div class="project-bx-bck-overlay"></div>
                <div class="project-bx-hidden">
                    <div class="project-bx-hidd-wrapp">
                        <h3>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-2-headline')}} @else {{trans('mne.project-box-2-headline')}} @endif</h3>
                        <a href="/project/2"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-button')}} @else {{trans('mne.project-box-button')}} @endif</span></a>
                    </div>
                </div>
            </div>
            <div class="project-bx">
                <div class="project-bx-bck-overlay"></div>
                <div class="project-bx-hidden">
                    <div class="project-bx-hidd-wrapp">
                        <h3>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-3-headline')}} @else {{trans('mne.project-box-3-headline')}} @endif</h3>
                        <a href="/project/3"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-button')}} @else {{trans('mne.project-box-button')}} @endif</span></a>
                    </div>
                </div>
            </div>
            <div class="project-bx">
                <div class="project-bx-bck-overlay"></div>
                <div class="project-bx-hidden">
                    <div class="project-bx-hidd-wrapp">
                        <h3>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-4-headline')}} @else {{trans('mne.project-box-4-headline')}} @endif</h3>
                        <a href="/project/4"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.project-box-button')}} @else {{trans('mne.project-box-button')}} @endif</span></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

<!--========================================
        6. LATEST NEWS
============================================-->

    <section class="blog">
        <div class="blog-head">
            <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.latest-news-headline-h1')}} @else {{trans('mne.latest-news-headline-h1')}} @endif</h1>
            <h2>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.latest-news-headline-h2')}} @else {{trans('mne.latest-news-headline-h2')}} @endif</h2>
        </div>
        <div class="blog-bck-overlay"></div>
        <div class="container">
            <div class="row">
                @if(sizeof($blogs) > 0)
                @foreach($blogs as $blog)
                <div class="col-sm-12 col-md-4 blog-bx">
                    <div class="blog-bx-wrapp">
                        <div class="blog-bx-top">
                            <a href="{{url('/blogs/' . $blog->id)}}"><img src="{{asset($blog->imagePath)}}" alt="Montenegros-One-cover-image"></a>
                        </div>
                        <div class="blog-bx-bottom">
                            <a href="/blogs/{{$blog->id}}" class="headline">
                                @if(App::getLocale() == 'mne')
                                    {{$blog->mne->title}}
                                @else
                                    {{$blog->eng->title}}
                                @endif
                            </a>
                            <p>{{\Carbon\Carbon::parse($blog->created_at)->format('d-m-Y')}}</p>
                            <a href="/blogs/{{$blog->id}}" class="btn"><span>@if(\Illuminate\Support\Facades\App::getLocale() == 'en')more @else više @endif</span></a>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>

<!--========================================
        7. MISSION
============================================-->

    <section class="mission">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 mission-ab">
                    <div class="mission-ab-wrapp">
                        <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-headline')}} @else {{trans('mne.mission-headline')}} @endif</h1>
                        <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-description')}} @else {{trans('mne.mission-description')}} @endif
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 mission-img">
                    <div class="mission-img-wrapp">
                        <div class="miss-img-top">
                            <img src="assets/images/banner/main-slider-1.jpg" alt="">
                        </div>
                        <div class="miss-img-bottom">
                            <img src="assets/images/banner/footer.jpg" alt="">
                            <img src="assets/images/banner/main-slider-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mission-row-2">
                <div class="col-sm-12 col-md-4 miss-1">
                    <div class="miss-1-wrapp">
                        <div class="miss-1-right">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-box-1-headline')}} @else {{trans('mne.mission-box-1-headline')}} @endif</h4>
                            <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-box-1-description')}} @else {{trans('mne.mission-box-1-description')}} @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 miss-2">
                    <div class="miss-2-wrapp">
                        <div class="miss-2-right">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-box-2-headline')}} @else {{trans('mne.mission-box-2-headline')}} @endif</h4>
                            <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-box-2-description')}} @else {{trans('mne.mission-box-2-description')}} @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 miss-3">
                    <div class="miss-3-wrapp">
                        <div class="miss-3-right">
                            <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-box-3-headline')}} @else {{trans('mne.mission-box-3-headline')}} @endif</h4>
                            <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.mission-box-3-description')}} @else {{trans('mne.mission-box-3-description')}} @endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
