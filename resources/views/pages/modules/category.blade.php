<div class="trending__product">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="section-title">
                <h4>{{ $category['name'] }}</h4>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="btn__all">
                @if(!Str::contains(url()->current(), '/all'))
                <a href="{{ route('category_view_all',Str::lower($category['name'])) }}" class="primary-btn">View All <span
                        class="arrow_right"></span></a>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($category['data'] as $data)
            @if (get_class($data) == 'App\Models\Movie')
                @include('pages.modules.movie', ['movie' => $data]);
            @else
                @include('pages.modules.playlist', ['playlist' => $data, 'alone'=>false]);
            @endif
        @endforeach
    </div>
</div>
