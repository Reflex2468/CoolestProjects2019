@extends('layouts.app')

@section('pageTitle', 'Projects')

@section('content')
    <div class="container mt-3">
        <div>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; autoplay-interval: 6000">

                <div class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid uk-grid-match" uk-grid>
                    @foreach(\App\Models\Project::all() as $project)
                        <div class="uk-card uk-card-default uk-padding-small" style="background: no-repeat center/cover url( {{$project->path_to_thumbnail}} )">
                            <h3 class="uk-card-title">{{$project->title}}</h3>
                            <p>{{$project->description}}</p>
                        </div>
                    @endforeach
                </div>
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