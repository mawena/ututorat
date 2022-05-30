@extends('app')


@section('title', 'Categories')

@section('content')

@include('pages.parts.header', ['is_tutor_page'=> false])
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Categories</span>
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
                @foreach ($categories as $category)
                    @include('pages.modules.category', ['category' => $category])
                @endforeach
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Random movies</h5>
                            </div>
                            @foreach ($randoms['movies'] as $movie)
                                    @include('pages.modules.additionnal_movie', ['movie' => $movie])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

@endsection
