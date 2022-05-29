@extends('app')

@section('title', 'Your activities')


@section('content')

@include('pages.parts.header', ['is_tutor_page'=> true])
    <section class="normal-breadcrumb set-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Your activities</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($main_categories as $category)
                        @include('pages.modules.category', ['category' => $category])
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Random Movies</h5>
                            </div>
                            <div class="filter__gallery">
                                @foreach ($randoms['movies'] as $movie)
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


    @include('pages.parts.blank_place')


@endsection
