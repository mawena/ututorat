@extends('app')


@section('title', 'Add a movie')

@section('content')

@include('pages.parts.header', ['is_tutor_page' => true])
    <div class="container anime__details__form">
        <form method="POST" action="{{ route('movie.create') }}" enctype="multipart/form-data">
            @if ($errors->any())
                <div class="alert alert-danger title_margin">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="section-title title_margin">
                <h5>Take the tutorial's poster image</h5>
            </div>
            <div class="drop-zone">
                <span class="drop-zone__prompt">Drop poster image file here or click to upload</span>
                <input type="file" name="image" class="drop-zone__input">
            </div>
            <div class="section-title title_margin">
                <h5>Take the tutorial's movie</h5>
            </div>
            <div class="drop-zone">
                <span class="drop-zone__prompt">Drop movie file here or click to upload</span>
                <input type="file" name="movie" class="drop-zone__input">
            </div>
            <div class="section-title title_margin">
                <h5>Choose the movie's category</h5>
            </div>
            <div class="input__item">
                <input type="radio" name="category" value="1" id="programmation" />
                <label for="programmation" style="color: white; font-size: larger; margin-right:30px">Programmation</label>

                <input type="radio" name="category" value="2" id="Personnal Development" />
                <label for="Personnal Development" style="color: white; font-size: larger; margin-right:30px">Personnal Development</label>

                <input type="radio" name="category" value="3" id="Right" />
                <label for="Right" style="color: white; font-size: larger; margin-right:30px">Right</label>

                <input type="radio" name="category" value="4" id="Tech" />
                <label for="Tech" style="color: white; font-size: larger; margin-right:30px">Tech</label>

                <input type="radio" name="category" value="5" id="Oratorical Art" />
                <label for="Oratorical Art" style="color: white; font-size: larger; margin-right:30px">Oratorical Art</label>

                <input type="radio" name="category" value="6" id="Other" checked />
                <label for="Other" style="color: white; font-size: larger; margin-right:30px">Other</label>
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
            <textarea placeholder="Movie description" class="input-text" name="description" required
                style="color:#0B0C2A"></textarea>
            <button type="submit">Publish</button>
        </form>
        @include('pages.parts.blank_place')
    </div>



@endsection
