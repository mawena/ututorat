@extends('app')

@include('pages.parts.header', ['is_tutor_page'=> true])

@section('title', 'Created playlists')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <span>Romance</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            @include('pages.modules.playlist')
            @include('pages.modules.playlist')
            @include('pages.modules.playlist')
            @include('pages.modules.playlist')
        </div>
    </section>
    <!-- Anime Section End -->

@endsection
