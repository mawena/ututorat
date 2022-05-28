@extends('app')

@include('pages.parts.header', ['is_tutor_page' => true])

@section('title', 'Created movies')

@section('content')

    @empty($movie)
    <div style="margin-bottom: 11%">
        @include('pages.parts.blank_place')
    </div>
    @endempty
    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    @include('pages.modules.movie', ['movie' => $movie])
                @endforeach
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

@endsection
