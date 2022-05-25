@extends('app')

@include('pages.parts.header', ['is_tutor_page' => false])

@section('title') {{ $movie->title }} @endsection

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('categories') }}">Categories</a>
                        <a href="{{ route(Str::replace(' ','_',Str::lower($movie->category->title))) }}">{{ $movie->category->title }}</a>
                        <span>{{ $movie->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="anime__video__player" style="height: 70%">
                        <video id="player" playsinline controls data-poster="{{ asset('videos/anime-watch.jpg') }}">
                            <source src="{{ asset('videos/1.mp4') }}" type="video/mp4" />
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="en" default />
                        </video>
                    </div>
                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>Next Movies</h5>
                        </div>
                        @foreach ($movie->playlist ?? [] as $movie)
                            <a href="{{ route('watch',$movie->id) }}">{{ $movie->title }}</a>
                        @endforeach
                        @foreach ($other ?? [] as $movie)
                            <a href="{{ route('watch',$movie->id) }}">{{ $movie->title }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Comments</h5>
                        </div>
                        @foreach ($movie->comments ?? [] as $comment)
                            @include('pages.modules.comment',['comment' => $comment])
                        @endforeach
                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                        <form action="{{ route('comment.store') }}">
                            <textarea placeholder="Your Comment"class="input-text" name="content" required style="color:#0B0C2A"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i>Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

@endsection
