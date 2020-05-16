@extends('layouts.base')
@section('content')
    <div class="ui two column centered grid" style="margin-top: 15%">
        <div class="column">
            <h2 class=" text">Vlog Login</h2>
            <form class="ui form error" method="post" action="{{ route('tLogin') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" placeholder="Your Email">
                </div>
                @if($errors->has('email'))
                    <div class="ui negative message">
                        <div class="header">
                            Email is required
                        </div>
                        <p>You can only login up for an account once with a given e-mail address.</p>
                    </div>
                @endif
                <div class="field">
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd">
                </div>
                @if($errors->has('pwd'))
                    <div class="ui error message">
                        <div class="header">Password is required</div>
                    </div>
                @endif
                <div class="ui buttons">
                    <button class="ui button primary" type="submit">Login</button>
                    <div class="or"></div>
                    <a href="{{ route('Uregister') }}" class="ui animated fade button" tabindex="0">
                        <div class="visible content">Register</div>
                        <div class="hidden content">
                            Not user?
                        </div>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection