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


            </p>
            <p>Description: {{ $movie->description }}
            </p>
        </div>

    </div>

</article> <!-- end article -->
<article class="masonry__brick entry format-standard" data-aos="fade-up">
    <form action="{{ route('save_edited_movie', ['id' => $movie->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="entry__thumb">
            <img src="{{ asset('movies/'. $movie->movie_image) }}"     srcset="{{ asset('movies/'. $movie->movie_image) }} 1x, {{ asset('movies/'. $movie->movie_image) }} 2x" alt="">
            <input type="file" name="movie_image" value="{{ $movie->movie_image }}">
    </div>

    <div class="entry__text">
        <div class="entry__header">
            <label for="movie_name">Movie Name</label>
            <input type="text" name="movie_name" value="{{ $movie->movie_name }}" autocomplete="off">
        </div>
        <div class="entry__header">
            <label for="catagories">Catagories</label>
            <input type="text" name="catagory" value="{{ $movie->catagories }}" autocomplete="off">
        </div>
        <div class="entry__excerpt">
            <label for="rating">Rating</label>
            <input type="text" value="{{ $movie->rating }}" name="rating">
        </div>
        <div class="entry__excerpt">
            <label for="description">Description</label>
            <textarea name="description">{{ $movie->description }}</textarea>
        </div>
        <div class="entry__meta">
            <span class="entry__meta-links">
                <button type="submit" class="select-movie">Save</button>
            </span>
        </div>
    </div>
</form>
</article> <!-- end article -->


