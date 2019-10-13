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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project-{{$project->id}}">
                        Probeer het uit!
                    </button>
                    <form style="display: inline-block;"
                          method="post"
                          action="{{route('like', ['project_id' => $project->id])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="fa fa-heart"></i>
                            <span>{{$project->getLikes()}}</span>
                            &nbsp;{{$project->liked() ? 'unlike' : 'like' }}
                        </button>
                    </form>

                    <!-- Modal -->
                    <div class="modal fade" id="project-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$project->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Werkt het project niet op deze pagina? Ga dan naar <a target="_blank" href="{{$project->getURL()}}">de site van het project</a>.</p>
                                    {!! $project->getEmbed() !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('javascript')

@endsection
