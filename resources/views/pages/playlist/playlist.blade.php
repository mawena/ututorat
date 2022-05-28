@extends('app')

@include('pages.parts.header', ['is_tutor_page' => false])

@section('title', 'Personnal playlist')

@section('content')

    <div class="container title_margin">
        <div class="section-title">
            <h5>Your playlist</h5>
            @empty($movies[0])
                <p>Your playlist is empty for the moment</p>
            @endempty
        </div>
        <div class="row">
            @foreach ($movies as $movie)
                @include('pages.modules.movie', ['movie' => $movie])
            @endforeach
        </div>
    </div>


    @empty($movies[0])
        @include('pages.parts.blank_place')
    @endempty


@endsection
