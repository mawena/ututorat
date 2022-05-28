@extends('app')

@include('pages.parts.header', ['is_tutor_page' => true])

@section('title', 'Create a playlist')

@section('content')

    <div class="container anime__details__form">
        <form>
            @csrf
            <div class="section-title title_margin">
                <h5>Take the movies</h5>
            </div>
            <div style="height: 50%; overflow: scroll" class="container">
                <div class="row">
                    @foreach ($movies as $movie)
                        @include('pages.modules.movie', ['movie' => $movie , 'alone' => false])
                        <input type="checkbox" class="checkbox" style="width:20px; height:20px" name="{{ $movie->id }}" />
                    @endforeach
                </div>
            </div>
            <div class="section-title title_margin">
                <h5>Enter the playlist's title</h5>
            </div>
            <div class="input__item">
                <input id="title" type="text" class="form-control" name="title" required style="color: #0B0C2A;"
                    placeholder="Playlist title">
            </div>
            <div class="section-title title_margin">
                <h5>Enter the playlist's description</h5>
            </div>
            <textarea placeholder="Playlist description" class="input-text" name="content" required
                style="color:#0B0C2A"></textarea>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <button type="submit">Publish</button>
        </form>
        @include('pages.parts.blank_place')
    </div>


@endsection
