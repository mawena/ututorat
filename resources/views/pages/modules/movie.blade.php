<div class="col-lg-5 col-md-5 col-sm-5"  style="margin-right: @if(!isset($alone)) 60px @endif">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="{{ asset('img/trending/play.png') }}">
            <div class="ep">{{ $movie->category->title }}</div>
            <div class="comment"><i class="fa fa-comments"></i> {{ count($movie->comments) }}</div>
            <div class="view"><i class="fa fa-eye"></i> {{ count($movie->views) }}</div>
        </div>
        <div class="product__item__text">
            <ul>
                <li>{{ $movie->user->name }}</li>
            </ul>
            <h5><a href="{{ route('watch',$movie->id) }}">{{ $movie->title }}</a></h5>
        </div>
    </div>
</div>
