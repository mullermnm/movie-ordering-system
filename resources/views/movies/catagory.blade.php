<x-layout>

<section class="s-content">
    <div class="row narrow">
        <div class="col-full s-content__header" data-aos="fade-up">
            <h1>Latest {{ $catagory }} Movies</h1>

            <p class="lead">Watch The Latest {{ $catagory }} Movies</p>
        </div>
    </div>
    <div class="row masonry-wrap">
        <div class="masonry">
            <div class="grid-sizer"></div>

                @foreach ($movies as $movie)
                    <x-movie_card :movie="$movie"/>
                @endforeach

        </div>
    </div>

    <x-paginator :catagory="$catagory"/>


</section>

<div class="selected-movie">
    <a id="showSelectedMovies" onclick="showSelectedMovies()">done</a>
</div>

<div class="display-selected-movies">
    <form action="{{ route('submit_selected_movies') }}" method="POST" class="selected-movies-form">
        <h3 class="selected-p">Selected Movies</h3>
        <span class="movie-shower"></span>
            @csrf
            <label for="username">Enter Name</label>
            <input type="text" autocomplete="off" name="username" placeholder="Name" title="Your Name" class="search-field">
            <input type="text" value="" name="selected" id="movie_input" style="visibility: hidden">
            <input type="submit" value="Done">
        </form>


    <a href="#0" title="Close Search" class="display-selected-movies-close header__overlay-close">Close</a>

</div>  <!-- end header__search -->


<x-footer />
</x-layout>
<script>
    var selected = [];
    function selectedMovies(movie_image) {
        selected.push(movie_image)
        sel = document.getElementsByClassName('selected-movie')
        sel[0].classList.add("link-is-visible")
        console.log(selected)
        addSelectedMovie(movie_image)
        document.querySelector("#movie_input").value = selected
    }
    function showSelectedMovies() {
        mov = document.getElementsByClassName('display-selected-movies')
        mov[0].classList.add("display-selected-movies-is-visible")
    }
    document.querySelector('.display-selected-movies-close').addEventListener('click', function() {
        mov = document.getElementsByClassName('display-selected-movies')
        mov[0].classList.remove("display-selected-movies-is-visible")


})
    function addSelectedMovie(movie_image) {
        moviesHolder = document.getElementsByClassName('movie-shower')
        const div = document.createElement('div')
        const img = document.createElement('img')
        const p = document.createElement('p')
        p.classList.add('movie-name')
        const node = document.createTextNode(movie_image)
        const span = document.createElement('a')
        span.text = "close"
        span.classList.add('delete-movie')
        span.setAttribute('id', movie_image)
        img.src = "../movies/" + movie_image +""
        img.classList.add('movies-image')
        moviesHolder[0].appendChild(div)
        div.appendChild(img)
        p.appendChild(node)
        div.appendChild(p)
        div.appendChild(span)
        document.getElementById(movie_image).addEventListener('click', function () {
        let movie = document.querySelector('.delete-movie').parentNode
        let holder = movie.parentNode
        holder.removeChild(movie)
        for (let i = 0; i < selected.length; i++) {
            if (selected[i] == movie_image) {
                selected.splice(i, 1)
            }
        }
        console.log(selected)
    })
    }
/*    function postSelectedMovies() {
        //xhttp.open("GET", "submit_selected_movies?m="+selected)
        //xhttp.send()
        $(document).ready(function () {
            console.log(selected)
            $.ajax({
              url: "{{ route('submit_selected_movies') }}",
                method: "POST",
                data: selected,
                success: function (res) {
                console.log("submitted")
            }
        })
        })
    }
    */


</script>
