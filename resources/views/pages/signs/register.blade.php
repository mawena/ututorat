@extends('app')


@section('title', 'Register')

@section('content')

@include('pages.parts.header', ['is_tutor_page' => false])
    <!-- Signup Section Begin -->
    <section class="signup spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Sign Up</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            @error('name')
                                <span role="alert" style="width: 150px">
                                    <span style="font-size: 20px; color:#E53637">{{ $message }}</span>
                                </span>
                            @enderror
                            <div class="input__item">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                    style="color: #0B0C2A;" placeholder="Name">
                                <span class="icon_profile" style="color: #E53637;"></span>
                            </div>
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
                            <div class="input__item">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"
                                    autocomplete="current-password" style="color: #0B0C2A;" placeholder="Confirm password">
                                <span class="icon_lock" style="color: #E53637;"></span>
                            </div>
                            <button type="submit" class="site-btn">Login Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Already have an account?</h3>
                        <a href="{{ route('account/login') }}" class="primary-btn">Log In!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup Section End -->



@endsection
