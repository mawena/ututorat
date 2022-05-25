<div class="anime__details__content">
    <div class="row">
        <div class="col-lg-{{ $alone ? 4 : 5 }}" style="margin-left: 16px">
            <div class="anime__details__pic set-bg" data-setbg="{{ asset('img/anime/details-pic.jpg') }}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="anime__details__text">
                <div class="anime__details__title">
                    <h3>{{ $playlist->title }}</h3>
                    <span>By {{ $playlist->user->name }}</span>
                </div>
                <p>{{ substr($playlist->description,0,190) }}...</p>
                <div class="anime__details__widget">
                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><span>{{ count($playlist->movies) }} Movies</span></li>
                            <li><span>{{ date_format($playlist->created_at,'d M Y') }}</span></li>
                            <li><span>{{ date_format($playlist->created_at,'h:i') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="anime__details__btn">
                    <a href="{{ route('playlist_movies', $playlist->id) }}" class="follow-btn"><i
                            class="fa "></i>Movies</a>
                    {{-- route('watch',2) 2 is the first movie of the playlist --}}
                    {{-- <a href="{{ route('watch', $playlist->movies) }}" class="watch-btn"><span>Watch All</span> <i
                            class="fa fa-angle-right"></i></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
