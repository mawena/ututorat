@extends('app')


@section('title', 'Created playlists')

@section('content')

@include('pages.parts.header', ['is_tutor_page' => true])
    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            @foreach ($movies as $movie)
                @include('pages.modules.playlist', [
                    'playlist' => $playlist ,
                    'movies' => $movies,
                    'alone' => true
                ])
            @endforeach
        </div>
    </section>
    <!-- Anime Section End -->

    <div style="margin-bottom: 11%">
        @include('pages.parts.blank_place')
    </div>

@endsection
