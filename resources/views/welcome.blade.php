@extends('layouts.app')

@section('pageTitle', 'Projects')

@section('content')
    <div class="container mt-3">
        <div class="row">
            @foreach(\App\Models\Project::all() as $project)
                <div class="col-md-3">
                    <img style="width: 100%;" src="{{$project->path_to_thumbnail}}" alt="thumbnail">
                    <h3>{{$project->title}}</h3>
                    <p>
                        @if($project->description === "lorem ipsum")
                            Klik <a class="text-info" href="{{$project->getURL()}}" target="_blank">hier</a> om het project te bekijken.
                        @else
                            {{$project->description}}
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('javascript')

@endsection
