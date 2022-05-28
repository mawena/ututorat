<div class="product__sidebar__view__item set-bg mix day years" data-setbg="{{ asset('img/trending/play.png') }}">
    <div class="ep">{{ $movie->user->name }}</div>
    <div class="view"><i class="fa fa-eye"></i> {{ count($movie->views) }}</div>
    <h5><a href="{{ route('watch', $movie->id) }}">{{ $movie->title }}</a></h5>
</div>
