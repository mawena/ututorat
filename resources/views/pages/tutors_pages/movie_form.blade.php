@extends('app')

@include('pages.parts.header', ['is_tutor_page' => true])

@section('title', 'Add a movie')

@section('content')

    <div class="container anime__details__form">
        <form>
            @csrf
            <div class="section-title title_margin">
                <h5>Take the movie</h5>
            </div>
            <div class="drop-zone">
                <span class="drop-zone__prompt">Drop file here or click to upload</span>
                <input type="file" name="movie_file" class="drop-zone__input">
            </div>
            <div class="section-title title_margin">
                <h5>Enter the movie's title</h5>
            </div>
            <div class="input__item">
                <input id="title" type="text" class="form-control" name="title" required style="color: #0B0C2A;"
                    placeholder="Movie title">
            </div>
            <div class="section-title title_margin">
                <h5>Enter the movie's description</h5>
            </div>
            <textarea placeholder="Movie description" class="input-text" name="content" required style="color:#0B0C2A"></textarea>
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
