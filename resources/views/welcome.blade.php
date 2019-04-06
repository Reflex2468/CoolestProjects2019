@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div>

            w

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; autoplay-interval: 6000">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="{{asset('images/slide1.jpg')}}" alt="" uk-cover>
                    </li>
                    <li>
                        <img src="{{asset('images/slide2.jpg')}}" alt="slide2" uk-cover>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

            </div>

        </div>
    </div>
@endsection

@section('javascript')

@endsection