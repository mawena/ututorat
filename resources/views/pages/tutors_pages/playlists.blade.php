@extends('app')

@include('pages.parts.header', ['is_tutor_page' => true])

@section('title', 'Created playlists')

@section('content')

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

@endsection
