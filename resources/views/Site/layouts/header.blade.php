<header id="site_header" class="header">
    <div class="header-content clearfix">

        <!-- Text Logo -->
        <div class="text-logo">
            <a href="/">
                <div class="logo-symbol">A</div>
                <div class="logo-text">Ali <span>Qadimi</span></div>
            </a>
        </div>
        <!-- /Text Logo -->

        <!-- Navigation -->
        <div class="site-nav mobile-menu-hide">
            <ul class="leven-classic-menu site-main-menu">
                <li class="menu-item current-menu-item">
                    <a href="/">About Me</a>
                </li>

                <li class="menu-item">
                    <a href="{{route('resume')}}">Resume</a>
                </li>


                <li class="menu-item">
                    <a href="{{route('blogs')}}">Blogs</a>
                </li>

                <li class="menu-item">
                    <a href="{{route('contacts')}}">Contact</a>
                </li>
                @auth
                    <li class="menu-item">
                        <a onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                            logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </li>
                @endauth

            </ul>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="menu-toggle mobile-visible">
            <i class="fa fa-bars"></i>
        </a>
        <!-- Mobile Menu Toggle -->
    </div>
</header>
