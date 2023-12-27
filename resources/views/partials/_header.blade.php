
<header class="header">
                <div class="header__content row">

                    <div class="header__logo">
                        <a class="logo" href="{{ route('home') }}">
                            Muller Home Of Movies
                        </a>
                    </div> <!-- end header__logo -->

                    <ul class="header__social">
                        <li>
                            <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end header__social -->

                    @include('partials._search')
                    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                    <nav class="header__nav-wrap">

                        <h2 class="header__nav-heading h6">Site Navigation</h2>

                        <ul class="header__nav">
                            <li class="current"><a href="{{ route('home') }}" title="">Home</a></li>
                            <li class="has-children">
                                <a href="#0" title="">Categories</a>
                                <ul class="sub-menu">
                                <li><a href="{{ route('catagory', ['catagory' => 'series']) }}">Series</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'romantic']) }}">Romantic</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'adventure']) }}">Adventure</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'animation']) }}">Animation</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'comedy']) }}">Comedy</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'action']) }}">Action</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'horror']) }}">Horror</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'eritrean']) }}">Eritrean</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'amharic']) }}">Amharic</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'indian']) }}">Indian</a></li>
                                <li><a href="{{ route('catagory', ['catagory' => 'korean']) }}">korean</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}" title="">Contact</a></li>
                            <li><a href="{{ route('admin_home') }}" title="">Admin</a></li>
                        </ul> <!-- end header__nav -->

                        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                    </nav> <!-- end header__nav-wrap -->

                </div> <!-- header-content -->
            </header> <!-- header -->
