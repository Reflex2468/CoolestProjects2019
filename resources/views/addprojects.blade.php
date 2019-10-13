@extends('layouts.app')

@section('pageTitle', 'Projects')

@section('content')
    <div class="container mt-3">
        <form action="{{route('postAddProject')}}" method="post">
            @csrf
            <legend class="uk-legend">Nieuw Project</legend>
            <div class="uk-margin">
                <label for="user">Gebruikersnaam</label>
                <input id="user" class="uk-input" type="text" placeholder="vb. cdjeeklo" name="user">
            </div>
            <div class="uk-margin">
                <label for="url">Link naar het project</label>
                <input id="url" class="uk-input" type="text" placeholder="vb. https://scratch.mit.edu/projects/303723397/" name="url">
            </div>
            <button type="submit" class="uk-button uk-button-primary">project toevoegen</button>
        </form>
    </div>
@endsection

@section('javascript')

@endsection
