@extends('layouts.front')

@section('banner')

    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="banner-bx">
                    <h2>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{ trans('eng.contact-banner-headline') }} @else {{ trans('mne.contact-banner-headline') }} @endif</h2>
                    <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-banner')}} @else {{ trans('mne.contact-banner') }} @endif</h1>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')
    <!--========================================
        2.  CONTACT
============================================-->

    <section class="contact-pg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-top">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944.37362229161!2d19.241650715385305!3d42.44106597918143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d7394fc13e86668!2sThe%20Capital%20Plaza!5e0!3m2!1sen!2s!4v1577366760599!5m2!1sen!2s"
                            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="">
                        </iframe>
                    </div>
                    <div class="contact-bottom">
                        <div class="row">
                            <div class="col-sm-12 col-md-3 contact-bottom-left">
                                <div class="contact-b-l-wrapp">
                                    <h1>@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-pg-headline')}} @else {{ trans('mne.contact-pg-headline') }} @endif</h1>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-9 contact-bottom-right">
                                <form>
                                    <div class="form-wrapp-l">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contactName"
                                                aria-describedby="emailHelp" placeholder="@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-pg-name-placehoolder')}} @else {{ trans('mne.contact-pg-name-placehoolder') }} @endif">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="contactEmail"
                                                aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="contactSubject"
                                                aria-describedby="emailHelp" placeholder="@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-pg-subject-placehoolder')}} @else {{ trans('mne.contact-pg-subject-placehoolder') }} @endif">
                                        </div>
                                    </div>
                                    <div class="form-wrapp-r">
                                        <div class="form-group">
                                            <textarea class="form-control" name="" id="contactMessage" cols="30" rows="7"
                                                placeholder="@if(\Illuminate\Support\Facades\App::getLocale() == 'en') {{trans('eng.contact-pg-message-placehoolder')}} @else {{ trans('mne.contact-pg-message-placehoolder') }} @endif"></textarea>
                                        </div>
                                        <button type="button" onclick="sendContact()" class="btn btn-primary">@if(\Illuminate\Support\Facades\App::getLocale() == 'en') Send @else Pošalji @endif</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
