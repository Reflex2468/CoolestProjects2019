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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$project}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
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
    <script>

    </script>

@endsection
