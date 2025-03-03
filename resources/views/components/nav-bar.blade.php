<div class="navBar">
    <p class="navLogo">ROOS.</p>
    <nav>
        <a href="{{ route('posts.index') }}"
           class="navbar-item {{ Request::route()->getName() === 'posts.index' ? "is-active" : "" }}">
            Blog
        </a>
        <a href="{{ route('faq') }}"
           class="navbar-item {{ Request::route()->getName() === 'faq' ? "is-active" : "" }}">
            Faq
        </a>
        <a href="{{ route('dashboard') }}"
           class="navbar-item {{ Request::route()->getName() === 'dashboard' ? "is-active" : "" }}">
            Dashboard
        </a>
        <a href="{{ route('profile') }}"
           class="navbar-item {{ Request::route()->getName() === 'profile' ? "is-active" : "" }}">
            Profile
        </a>
        <a href="{{ route('home') }}"
           class="navbar-item {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
            Home
        </a>
    </nav>
</div>
