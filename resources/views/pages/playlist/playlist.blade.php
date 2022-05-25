@extends('app')

@include('pages.parts.header', ['is_tutor_page' => false])

@section('title', 'Personnal playlist')

@section('content')

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Your playlist</h2>
                        @empty($movies[0])
                            <p>Your playlist is empty for the moment</p>
                        @endempty
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    @include('pages.modules.additionnal_movie', ['movie' => $movie])
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    @empty($movies[0])
        @include('pages.parts.blank_place')
    @endempty


@endsection
