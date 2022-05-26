@extends('app')

@section('title', 'Your activities')

@include('pages.parts.header', ['is_tutor_page'=> true])

@section('content')

    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
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
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- @include('pages.modules.category', ['name' => 'New'])
                    @include('pages.modules.category', ['name' => 'Most seen'])
                    @include('pages.modules.category', ['name' => 'Most liked'])
                    @include('pages.modules.category', ['name' => 'Most commented']) --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

@endsection
