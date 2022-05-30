@extends('app')


@section('title', 'Login')

@section('content')

@include('pages.parts.header', ['is_tutor_page' => false])
    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @error('email')
                                <span role="alert" style="width: 150px">
                                    <span style="font-size: 20px; color:#E53637">{{ $message }}</span>
                                </span>
                            @enderror
                            <div class="input__item">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    style="color: #0B0C2A;" placeholder="Email">
                                <span class="icon_mail" style="color: #E53637;"></span>
                            </div>
                            @error('password')
                                <span role="alert">
                                    <span style="font-size: 20px; color:#E53637">{{ $message }}</span>
                                </span>
                            @enderror
                            <div class="input__item">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" style="color: #0B0C2A;" placeholder="Password">
                                <span class="icon_lock" style="color: #E53637;"></span>
                            </div>
                            <div>
                                <input style="width:20px; height:20px" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label style="color: white; font-size:20px; font-weight:lighter" class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <button type="submit" class="site-btn">Login Now</button>
                            @if (Route::has('password.request'))
                                <a style="color: white; margin-left:25px" href="{{ route('account/forgot') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="{{ route('account/register') }}" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->


@endsection
