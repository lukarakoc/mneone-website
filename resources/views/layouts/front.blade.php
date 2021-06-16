<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
          content="Montenegro’s ONE is established to provide full solution for investing, business and living so you can be part of a successful story in Montenegro.">
    <meta name="keywords"
          content="business, invest, accounting, manegment, marketing, real estate, consulting, architecture, construction, design, restaurants">

    <!-- Twitter cards and open graphs -->
    <meta property="og:title" content="Montenegro’s ONE">
    <meta property="og:description"
          content="Montenegro’s ONE is established to provide full solution for investing, business and living so you can be part of a successful story in Montenegro.">
    <meta property="og:image" content="assets/images/logo.png">
    <meta property="og:url" content="http://montenegrosone.com/">
    <meta property="og:type" content="article" />

    <meta name="twitter:title" content="Montenegro’s ONE">
    <meta name="twitter:description"
          content="Montenegro’s ONE is established to provide full solution for investing, business and living so you can be part of a successful story in Montenegro.">
    <meta name="twitter:image" content="assets/images/logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Twitter cards and open graphs -->

    <title>Montenegro's One</title>
    <link rel="canonical" href="www.montenegrosone.com">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,700,900|Poppins:400,700,900|Roboto+Condensed:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}">

    <!-- JSON SCHEMAS -->
    <script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "HomeAndConstructionBusiness",
            "name": "Montenegros's ONE",
            "url": "http://montenegrosone.com/",
            "logo": "http://montenegrosone.com/wp-content/uploads/logo_color.png",
            "description": "Montenegro’s ONE is established to provide full solution for investing, business and living so you can be part of a successful story in Montenegro.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "The Capital Plaza - George Washington Boulevard no. 98, floor VIII",
                "addressLocality": "Podgorica",
                "addressRegion": "Podgorica",
                "postalCode": "81000",
                "addressCountry": "Montenegro"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "42.440750",
                "longitude": "19.243395"
            },
            "hasMap": "https://www.google.com/maps/search/The+Capital+Plaza+-+George+Washington+Boulevard+no.+98,+floor+VIII,+81000+Podgorica,+Montenegro/@42.4410699,19.2416507,17z/data=!3m1!4b1",
            "openingHours": "Mo 08:00-16:00 Tu 08:00-16:00 We 08:00-16:00 Th 08:00-16:00",
            "telephone": "+382 20 675 404"
        }
    </script>
</head>

<body>

<!--========================================
        1. NAVIGATION AND BANNER
============================================-->

<section class="nav-bann">
    <div class="nav-bann-bac-overlay"></div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/"><img src="{{asset('assets/images/logo.png')}}" alt="Montenegros-One-logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="menu-btn_burger"></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">@if(\Illuminate\Support\Facades\App::getLocale()  == 'en')Home @else Početna @endif</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact-us">@if(\Illuminate\Support\Facades\App::getLocale()  == 'en')Contact @else Kontakt @endif</a>
                </li>
                <div class="nav-language">
                    <a class="mne" href="{{ url('/setlocale/mne') }}">MNE</a>
                    <span></span>
                    <a class="en" href="{{ url('/setlocale/en') }}">EN</a>
                </div>
            </ul>
        </div>
    </nav>

@yield('banner')

</section>



@yield('content')

<!--========================================
        8. FOOTER
============================================-->

<div class="footer">
    <div class="footer-bck-overlay"></div>
    <div class="container f-con-2">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 foot-1">
                <img src="{{asset('assets/images/logo.png')}}" alt="">
                <p>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.footer-description')}} @else {{ trans('mne.footer-description') }} @endif
                </p>
                <ul>
                    <li><a href="https://www.facebook.com/montenegrosone/?modal=admin_todo_tour" target="__blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/montenegrosone/?hl=en" target="__blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/montenegro%E2%80%99s-one/?viewAsMember=true" target="__blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-3 foot-2">
                <h4>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-headline')}} @else {{ trans('mne.contact-headline') }} @endif </h4>
                <ul>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <a href="">@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-adress')}} @else {{ trans('mne.contact-adress') }} @endif</a>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="tel:+382 20 675 404">+382 20 675 404</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@montenegrosone.com">info@montenegrosone.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 foot-3">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="contactFooterName" aria-describedby="emailHelp"
                               @if(\Illuminate\Support\Facades\App::getLocale()  == 'en')placeholder="Name and Lastname" @else placeholder="Ime i prezime" @endif >
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="contactFooterEmail"
                               aria-describedby="emailHelp" @if(\Illuminate\Support\Facades\App::getLocale()  == 'en')placeholder="Email" @else placeholder="Email" @endif >
                    </div>
                    <div class="form-group">
                            <textarea class="form-control" name="" id="contactFooterMessage" cols="30" rows="3"
                                      @if(\Illuminate\Support\Facades\App::getLocale()  == 'en')placeholder="Message" @else placeholder="Poruka" @endif
                                      ></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="sendContactFooterMail()">@if(\Illuminate\Support\Facades\App::getLocale()  == 'en')Send @else Pošalji @endif</button>
                </form>
            </div>
        </div>
    </div>
    <div class="container f-con-3">
        <div class="row">
            <div class="col-12 foot-4">
                <div class="foot4-wrapp">
                    <p>© Copyrights 2019 Montenegro’s One. All rights reserved.</p>
                    <p>Designed and created by <span>Alterico</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="{{asset('assets/js/main.min.js')}}"></script>
<script src="{{asset('assets/web-controller.js')}}"></script>

</body>

</html>
