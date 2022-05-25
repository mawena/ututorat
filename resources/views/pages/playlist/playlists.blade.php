@extends('app')

@include('pages.parts.header', ['is_tutor_page'=> false])

@section('title', 'Playlists')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Playlists</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="col-lg-12">
            @foreach ($playlists as $playlist)
                @include('pages.modules.playlist',['playlist' => $playlist,'alone'=>true])   
            @endforeach
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

@endsection
