<x-layout>
    <x-card>
        <div class="entry" style="background-image:url('../images/featured-guitarman.jpg');">
            <div class="entry__content">
                <span class="entry__category"><a href="{{ route('ordered_movies') }}">Ordered Movies</a></span>
                <h1><a href="{{ route('ordered_movies') }}" title="">See Ordered Movies </a></h1>
                <div class="entry__info">
                    <ul class="entry__meta">
                        <li>Eng</li>
                        <li>Amh</li>
                        <li>Tig</li>
                    </ul>
                </div>
            </div> <!-- end entry__content -->
        </div> <!-- end entry -->
    </div> <!-- end featured__big -->
    <div class="featured__column featured__column--small">

<div class="entry" style="background-image:url('images/thumbs/featured/featured-watch.jpg');">

<div class="entry__content">
    <span class="entry__category"><a href="{{ route('upload_movie') }}">Movies</a></span>
    <h1><a href="{{ route('upload_movie') }}" title="">Upload Movies</a></h1>


</div> <!-- end entry__content -->

</div> <!-- end entry -->
<div class="entry" style="background-image:url('images/thumbs/featured/featured-beetle.jpg');">
                        <div class="entry__content">
                            <span class="entry__category"><a href="#0">Softwares</a></span>

                            <h1><a href="#0" title="">Choose Any Software You Want</a></h1>
                            <div class="entry__info">
                                <ul class="entry__meta">
                                    <li>Softwares</li>
                                    <li>Mobile Apps</li>
                                </ul>
                            </div>

    </x-card>

    <x-footer />
</x-layout>
