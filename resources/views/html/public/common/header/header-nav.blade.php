<!-- Navbar -->
<nav class="navbar" id="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="nav-logo">
            <span class="logo-mark">MP</span>
            <span class="logo-text">Manish Pathak</span>
        </a>
        <div class="nav-links" id="navLinks">
            <a href="{{ route('about') }}" class="nav-link" data-i18n="nav.about">About</a>
            <a href="{{ route('experience') }}" class="nav-link" data-i18n="nav.experience">Experience</a>
            <a href="{{ route('skills') }}" class="nav-link" data-i18n="nav.skills">Skills</a>
            <a href="{{ route('projects') }}" class="nav-link" data-i18n="nav.projects">Projects</a>
            <a href="{{ route('showcase') }}" class="nav-link" data-i18n="nav.showcase">Showcase</a>
            <a href="{{ route('contact') }}" class="nav-link" data-i18n="nav.contact">Contact</a>
            @auth
            {{-- If user is logged in --}}
            <a href="{{ route($accountController->currentDashboardEndpoint()) }}">
                <span class="cmn__icon"><i class="fa-regular fa-user"></i></span>
            </a>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="tech-tag" type="submit">
                    {{ __('Log Out') }}
                </button>
            </form>
            @endauth

            @guest
            {{-- If user is NOT logged in --}}
            <a href="{{ route('auth.login') }}">
                <span class="cmn__icon"><i class="fa-regular fa-user"></i></span>
            </a>
            @endguest
            <div class="lang-switcher">
                <button class="lang-btn" id="langBtn">🌐 EN</button>
                <div class="lang-dropdown" id="langDropdown">
                    <button data-lang="en">🇬🇧 English</button>
                    <button data-lang="de">🇩🇪 Deutsch</button>
                    <button data-lang="nl">🇳🇱 Nederlands</button>
                    <button data-lang="no">🇳🇴 Norsk</button>
                </div>
            </div>
            <a href="{{ route('contact') }}" class="btn-primary nav-cta" data-i18n="nav.hireMe">Hire Me</a>
        </div>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>