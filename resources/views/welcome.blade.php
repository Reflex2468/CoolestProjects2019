@extends('layouts.app')

@section('pageTitle', 'Projects')

@section('content')
    <div class="container mt-3">
        <div>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: pull; autoplay: true; autoplay-interval: 6000">

                <div class="uk-child-width-1-4@xl uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-1@s uk-grid uk-grid-match" uk-grid>
                    @foreach(\App\Models\Project::all() as $project)
                        <div class="uk-card uk-card-default uk-padding-small" style="box-sizing: border-box;">
                            <img src="{{$project->path_to_thumbnail}}" alt="thumbnail">
                            <h3 class="uk-card-title">{{$project->title}}</h3>
                            <p>
                                @if($project->description === "lorem ipsum")
                                    klik <a class="text-info" href="{{$project->getURL()}}">hier</a> om het project te bekijken.
                                @else
                                    {{$project->description}}
                                @endif
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection

@section('javascript')

@endsection