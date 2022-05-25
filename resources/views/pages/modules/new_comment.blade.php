<div class="product__sidebar__comment__item">
    <div class="product__sidebar__comment__item__pic">
        <img src="{{ asset("img/sidebar/comment-1.jpg") }}" alt="">
    </div>
    <div class="product__sidebar__comment__item__text">
        <ul>
            <li>{{ $comment->user->name ?? "" }}</li>            
        </ul>
        <h5><a href="{{ route('watch',1) }}">{{ $comment->content }}</a></h5>
        <span><i class="fa"></i> {{ $comment->created_at }}</span>
    </div>
</div>
