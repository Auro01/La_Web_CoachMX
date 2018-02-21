@extends('layouts.app')

@section('content')
<section class="section" id="login">
    <div class="container">
        <div class="level">
            <div class="level-left"></div>
            <div class="level-right">
                <div class="level-item">
                    <div class="box">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <b-field label="Email"
                                type="{{ $errors->has('email') ? 'is-danger' : '' }}"
                                message="{{ $errors->first('email') }}">
                                <b-input value="{{ old('email') }}"
                                    name="email"
                                    required>
                                </b-input>
                            </b-field>

                            <b-field label="Password"
                                type="{{ $errors->has('password') ? 'is-danger' : '' }}"
                                message="{{ $errors->first('password') }}">
                                <b-input type="password"
                                    value="{{ old('password') }}"
                                    name="password"
                                    required>
                                </b-input>
                            </b-field>

                            <div class="field">
                                <b-checkbox
                                    name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                    Remember Me
                                </b-checkbox>
                            </div>
                            <div class="control">
                                <button class="button is-primary">Log In</button>
                            </div>
                            <a href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
