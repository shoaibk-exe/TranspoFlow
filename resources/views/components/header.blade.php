<header class="header" data-header>
    <div class="container">
        <a href="#" class="logo">
            <img src="{{ asset('images/logo.svg') }}" width="160" height="50" alt="logo">
        </a>

        <nav class="navbar" data-navbar>
            <button class="close-btn" aria-label="close services" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="#" class="logo">
                <img src="{{ asset('images/logo.svg') }}" width="160" height="50" alt="transpoflow-logo">
            </a>

            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="{{ route('home') }}" class="navbar-link hover-underline {{ request()->routeIs('home') ? 'active' : '' }}">
                       
                        <div class="separator"></div>
                        <span class="span">Home</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('services') }}" class="navbar-link hover-underline {{ request()->routeIs('services') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">Services</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('aboutus') }}" class="navbar-link hover-underline {{ request()->routeIs('aboutus') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">About Us</span>
                    </a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('contact') }}" class="navbar-link hover-underline {{ request()->routeIs('contact') ? 'active' : '' }}">
                        <div class="separator"></div>
                        <span class="span">Contact</span>
                    </a>
                </li>
            </ul>
        </nav>

        <a href="{{ route('login') }}" class="btn btn-secondary">
            <span class="text text-1">Sign In</span>
            <span class="text text-2" aria-hidden="true">Sign In</span>
        </a>

        <a href="{{ route('register') }}" class="btn btn-secondary">
            <span class="text text-1">Sign Up</span>
            <span class="text text-2" aria-hidden="true">Sign Up</span>
        </a>

        <button class="nav-open-btn" aria-label="open services" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>
    </div>
</header>
