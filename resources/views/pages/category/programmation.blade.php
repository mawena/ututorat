@extends('app')

@include('pages.parts.header', ['is_tutor_page'=> false])

@section('title', 'Programmation')

@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <a href="{{ route('categories') }}">Categories</a>
                        @if (Str::contains(url()->current(), '/all'))
                            <a href="{{ route('other') }}">{{ $category['name'] }}</a>
                            <span>All</span>
                        @else
                            <span>{{ $category['name'] }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('pages.modules.category',['name'=> $category['name'], 'category' => $category])
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Random movies</h5>
                            </div>
                            <div class="filter__gallery">
                            @foreach ($category['random'] as $movie)
                                @include('pages.modules.additionnal_movie', ['movie' => $movie])
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

@endsection
