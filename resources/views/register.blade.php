@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <form class="d-flex justify-content-center">
            <fieldset class="uk-fieldset uk-width-1-2@m uk-width-1-1@s uk-child-width-1-1">

                <legend class="uk-legend">Register</legend>

                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input uk-width-1-1" type="text" placeholder="username">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input class="uk-input uk-width-1-1" type="text" placeholder="password">
                    </div>
                </div>

                <div class="uk-margin" uk-margin>
                    <button class="uk-button uk-button-primary">Register</button>
                </div>

            </fieldset>
        </form>
    </div>
@endsection