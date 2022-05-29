@extends('app')


@section('title', 'Become a tutor')

@section('content')
@include('pages.parts.header', ['is_tutor_page' => false])
<!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Do you want to teach the world ?</h3>
                            <a href="{{ route('account_upgrade') }}" type="submit" class="site-btn">Upgrade your account</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->
    <br/><br/>
    @include('pages.parts.blank_place')
    
@endsection
