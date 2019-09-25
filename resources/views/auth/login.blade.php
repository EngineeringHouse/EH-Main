@extends('layouts.app')

@section('body')

    <div class="center">
        <div class="text-left uk-card uk-card-body inline-block uk-card-large uk-card-default">
            <h3 class="uk-card-title text-center">Login</h3>
            <hr/>
            <form method="POST" action="{{ route('login') }}" class="padding">
                @csrf
                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input id="email" type="email" placeholder="email"
                           class="uk-input{{ $errors->has('email') ? ' uk-form-danger' : '' }}" name="email"
                           value="{{ old('email') }}" required autofocus>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input id="password" type="password" placeholder="password"
                               class="uk-input{{ $errors->has('password') ? ' uk-form-danger' : '' }}" name="password"
                               required>
                    </div>
                </div>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Login</button>
            </form>
        </div>
    </div>

@endsection
