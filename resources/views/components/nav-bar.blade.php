@php
    $links = [
        'Home' => 'home',
        'Profile' => 'profile',
        'Dashboard' => 'dashboard',
        'Faq' => 'faq',
        'Blog' => 'posts.index'
];
@endphp

<nav class="level">
    <div class="level-left">
        <div class="level-item">
            <p class="title">ROOS.</p>
        </div>
    </div>

    <div class="level-right">
        @foreach($links as $name => $route)
            <div class="level-item">
                <a class="button is-black is-rounded" href="{{ route($route) }}">
                    {{ $name }}
                </a>
            </div>
        @endforeach

</nav>
