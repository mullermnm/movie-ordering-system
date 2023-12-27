<?php
    $movies = explode(',', $order->movie_name);
?>
<article class="masonry__brick entry format-audio" data-aos="fade-up">
    <div class="entry__text">
<div class="entry__header">

    <div class="entry__date">
        <a href="single-audio.html">{{ $order->created_at }}</a>
    </div>
    <h1 class="entry__title"><a href="">{{ $order->username }}</a></h1>

</div>
@foreach ($movies as $movie)
    <div class="entry__excerpt">
            <img src="{{ asset('movies/'.$movie) }}" alt="movie" class="ordered-img">
            <p>
                {{ $movie }}
            </p>
    </div>
    @endforeach
    <div class="entry__meta">
        <span class="served-link">
            <a href="{{ route('delete_order', ['id' => $order->id]) }}">Served</a>
        </span>
    </div>
</div>
</article>
