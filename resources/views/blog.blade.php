<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    <style>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\main.css'; ?>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\blog.css'; ?>
    </style>

    <script>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\js\main.js'; ?>
    </script>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
{{-- Navigation bar --}}
<nav class="navbar is-primary  has-text-white" >
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <strong><i class="fas fa-graduation-cap"></i> HZ</strong>
            </a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('home') }}"
                   class="navbar-item {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
                    Home
                </a>
                <a href="{{ route('blog') }}"
                   class="navbar-item {{ Request::route()->getName() === 'blog' ? "is-active" : "" }}">
                    Blog
                </a>
                <a href="{{ route('dashboard') }}"
                   class="navbar-item {{ Request::route()->getName() === 'dashboard' ? "is-active" : "" }}">
                    Dashboard
                </a>
                <a href="{{ route('faq') }}"
                   class="navbar-item {{ Request::route()->getName() === 'faq' ? "is-active" : "" }}">
                    Faq
                </a>
                <a href="{{ route('profile') }}"
                   class="navbar-item {{ Request::route()->getName() === 'profile' ? "is-active" : "" }}">
                    Profile
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Content --}}
<div class="header">
    <h1>Blog.</h1>
</div>

<div id="blogRow1">
    <div id="blogFieldWork">
        <h3><a href="blogposts/fieldwork.html">field work article</a></h3>
        <p>description</p>

    </div>


    <div id="blogFirstFeedback" class="blogMiddle">
        <h3> <a href="blogposts/firstfeedback.html">First feedback</a></h3>
        <p>After two weeks of working on my website I had to pitch it to my teachers and fellow student. In this blog i'll show what feedback i got on my website.</p>

    </div>


    <div id="blogProgramming">
        <h3><a href="blogposts/programming.html">My programming experience</a></h3>
        <p>In this blog i'll talk about what (very little) experience I had in programming before I started this study.</p>

    </div>
</div>

<div id="blogRow2">
    <div id="blogStudyChoice">
        <h3><a href="blogposts/studychoice.html">Study choice</a></h3>
        <p>In this blog i'll explain why I think ICT fits me.</p>

    </div>


    <div id="blogSwot" class="blogMiddle">
        <h3><a href="blogposts/swot.html">SWOT</a></h3>
        <p>description</p>

    </div>
</div>

{{-- Footer --}}
<footer class="footer">
    <div class="container">
        <div class="columns is-multiline">

            <div class="column has-text-centered">
                <div>
                    <a href="/" class="link">Home</a>
                </div>
            </div>

            <div class="column has-text-centered">
                <div>
                    <a href="https://opensource.org/licenses/MIT" class="link">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                    </a>
                </div>
            </div>

        </div>

        <div class="content is-small has-text-centered">
            <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
            <p>PROJECT FOOTER HERE</p>
        </div>
    </div>
</footer>

</body>
</html>
