@php
    $catagories = explode(',', $movie->catagory);
@endphp
<article class="masonry__brick entry format-standard" data-aos="fade-up">
    <div class="entry__thumb">
        <a href="single-standard.html" class="entry__thumb-link">
            <img src="{{ asset('movies/'. $movie->movie_image) }}"     srcset="{{ asset('movies/'. $movie->movie_image) }} 1x, {{ asset('movies/'. $movie->movie_image) }} 2x" alt="">
        </a>
    </div>

    <div class="entry__text">
        <div class="entry__header">


            <h1 class="entry__title"><a href="single-standard.html">Title: {{ $movie->movie_name }}</a></h1>

        </div>
        <div class="entry__excerpt">
            <p>
                Rating:     {{ $movie->rating }}
            </p>
            <p>
                    @foreach ($catagories as $catagory)
                        {{  $catagory}}
                    @endforeach

            </p>
            <p>Description: {{ $movie->description }}
            </p>
        </div>
        <div class="entry__meta">
            <span class="entry__meta-links">
                <a href="{{ route('edit_selected_movie', ['id' =>  $movie->id]) }}">Edit</a>
                <button onclick="selectedMovies('{{ $movie->movie_image }}');" class="select-movie">Select</button>
            </span>
        </div>
    </div>

</article> <!-- end article -->
