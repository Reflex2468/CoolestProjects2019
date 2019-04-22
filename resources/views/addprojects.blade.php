@extends('layouts.app')

@section('pageTitle', 'Projects')

@section('content')
    <div class="container mt-3">
        <form action="{{route('postAddProject')}}" method="post">
            @csrf
            <legend class="uk-legend">Nieuw Project</legend>
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="titel" name="title">
            </div>
            <div class="uk-margin">
                <textarea class="uk-textarea" rows="5" placeholder="beschrijving" name="description"></textarea>
            </div>

            <button type="submit" class="uk-button uk-button-primary">project toevoegen</button>
        </form>
    </div>
@endsection

@section('javascript')

@endsection