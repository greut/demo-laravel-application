@extends('layouts.default', [
    'pageTitle' => trans('messages.Hi :username', [
        'username' => Auth::user()->username
    ])
])

@section('body')
<div class="container">
    <div class="row">
        <div class="col m6 s12">
            <h1>{{ Auth::user()->username }}</h1>
    @if (Auth::user()->country)
            <ul>
                <li>{{ trans('messages.E-mail :email', ['email' => Auth::user()->email]) }}</li>
                <li>{{ trans('messages.Country :country', ['country' => Auth::user()->country->name]) }}</li>
            </ul>
    @endif
            <p>
                <a class="btn-large waves-effect waves-light" href="{{ route('sign out', compact('lang')) }}">
                    {{ trans('messages.Sign out') }}
                </a>
            </p>
        </div>
        <form class="col m6 s12" method="POST" action="{{ url("home") }}">
            <h2 class="h4">Détails</h2>
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input type="email" id="c0" name="email" value="{{ old('email') ?: Auth::user()->email }}" required
                    @if ($errors->has('email'))
                           class="validate invalid"
                    @endif
                    >
                    <label for="c0"
                    @if ($errors->has('email') && old('email'))
                           data-error="{{ $errors->first('email') }}"
                    @endif
                    >Courriel</label>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <button type="submit" class="btn">Modifier</button>
                </div>
           </div>
        </form>
    </div>
</div>
@stop
