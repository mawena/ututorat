<div class="anime__review__item">
    <div class="anime__review__item__pic">
        <img src="{{ asset('img/profiles/default.jpg') }}" alt="anime">
    </div>
    <div class="anime__review__item__text">
        <h6>{{ $comment->user->name }} - <span>{{ date_format($comment->created_at,'d F y h:i') }}</span></h6>
        <p>{{$comment->content}}</p>
    </div>
</div>
