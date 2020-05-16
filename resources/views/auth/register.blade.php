@extends('layouts.base')
@section('content')
    <div class="ui two column centered grid" style="margin-top: 15%">
        <div class="column">
            <h2 class=" text">Vlog Register</h2>
            <form class="ui form error" method="post" action="{{ route('tRegister') }}">
                {{ csrf_field() }}
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name"  value="{{ old('name') }}" placeholder="Your Name">
                </div>
                @if($errors->has('name'))
                    <div class="ui error message">
                        <div class="header">Name is required</div>
                    </div>
                @endif
                <div class="field">
                    <label for="email">email</label>
                    <input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email">
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
                        <div class="header">{{ $errors->first('pwd') }}</div>
                    </div>
                @endif
                <div class="field">
                    <label for="pwd_confirmation">Password Confirm</label>
                    <input type="password" name="pwd_confirmation" id="pwd_confirmation">
                </div>
                @if($errors->has('pwd_confirmation'))
                    <div class="ui error message">
                        <div class="header">Password Confirm is required</div>
                    </div>
                @endif
                <div class="ui buttons">
                    <button class="ui button primary" type="submit">Register</button>
                    <div class="or"></div>
                    <a class="ui button" href="{{ route('Ulogin') }}">Login</a>
                </div>
            </form>
        </div>
    </div>

@endsection