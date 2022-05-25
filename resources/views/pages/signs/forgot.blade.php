@extends('app')

@include('pages.parts.header', ['is_tutor_page' => false])

@section('title', 'Forgot password ?')

@section('content')

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Reset your password</h3>
                        <form method="POST" action="{{ route('password.email') }}">
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
                            <button type="submit" class="site-btn">Send Password Reset Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

    @include('pages.parts.blank_place')
    
@endsection
