<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    <style>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\main.css'; ?>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\profile.css'; ?>
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
    <h1>Profile.</h1>
</div>

<div id="profileWhoAmI">
    <h2>Who am i?</h2>
    <p>My name is Rose and im 17 years old. I've recently moved to Vlissingen all the way from The Hague to come study at HZ.
        I had a dog at home called Pluto but since my new appartment doesnt allow pet he had to stay in The Hague. In my free time
        I like playing video games, wathcing movies and going to the movies and building gundam figures. My favorite kind of games
        are open-world games. I like exploring and leveling up usually more than the main story. One of my favorite games of all time
        is red dead redemption II, eventhough i have spent more than 200 hours playing it im still in chapter 2.

        <br><br>

        I love all kinds of movie but i definetly have a prefrence for horror and sci-fi. I do watch movies at home all the time but i prefer
        going to the theatre. I have a pathe ulimited subscription which allows me to go for free so ill usually go to the movies atleast
        once a week but sometimes multiple times a day.

        <br><br>

        I like being creative and working with my hand on cool projects like big lego build or gundam figures. Ive only made one gundam
        figure so far but i loved it so i already have 2 new sets waiting to be built.

    </p>
</div>

<div class="vl"></div>

<div id="profileSummary">
    <h2>Me in a summary</h2>
    <ul>
        <li>My name is Rose</li>
        <li>I'm 17 years old</li>
        <li>I like video games (surprising) </li>
        <li>I like movies, mostly going to the theatres </li>
        <li>I like building figures </li>
        <li>I have a dog called Pluto </li>
        <li>My biggest dream is to take the train through every country in europe </li>
    </ul>
</div>

<div class="emptyDiv"><p>.</p></div>
<div class="emptyDiv"><p>.</p></div>
<div class="emptyDiv"><p>.</p></div>





<div class="favoriteMovies">
    <h3>My favorite movies</h3>
    <hr class="line">

    <div class="scroll-container">
        <img src="photos/movies/legoBatman.jpg" alt="lego_batman" width="282" height="423">
        <img src="photos/movies/anihilation.jpg" alt="anihilation_poster" width="282" height="423">
        <img src="photos/movies/alien.jpg" alt="alien_poster" width="282" height="423">
        <img src="photos/movies/anotherROund.jpg" alt="anotherround_poster" width="282" height="423">
        <img src="photos/movies/speakNoEvil.jpg" alt="speaknoevil_poster" width="282" height="423">
        <img src="photos/movies/silenceOfTheLambs.jpg" alt="silenceofthelambs_poster" width="282" height="423">
        <img src="photos/movies/StarWars.jpg" alt="starwars_poster" width="282" height="423">
        <img src="photos/movies/interstellar.jpg" alt="interstellar_poster" width="282" height="423">
        <img src="photos/movies/isleOfTheDogs.jpg" alt="isleofthedogs_poster" width="282" height="423">
        <img src="photos/movies/jeanneDuBarry.jpg" alt="jeannedubarry_poster" width="282" height="423">
        <img src="photos/movies/neonGenesis.jpg" alt="neongenesis_poster" width="282" height="423">
        <img src="photos/movies/ponyo.jpg" alt="ponyo_poster" width="282" height="423">
        <img src="photos/movies/shawshank.jpg" alt="shawshank" width="282" height="423">
        <img src="photos/movies/StarWars.jpg" alt="starwars_poster" width="282" height="423">
        <img src="photos/movies/theTrumanShow.jpg" alt="trumanshow_poster" width="282" height="423">
    </div>

</div>

<div class="favoriteMusic">
    <h3>My favorite music </h3>
    <hr class="line">

    <div class="scroll-container">
        <img src="photos/music/radiohead.jpg " alt="radiohead " width="282 " height="500 ">
        <img src="photos/music/julie.jpg " alt="julie " width="282 " height="500 ">
        <img src="photos/music/panchiko.jpg " alt="panchiko " width="282 " height="500 ">
        <img src="photos/music/thesmiths.jpg " alt="thesmiths " width="282 " height="500 ">
        <img src="photos/music/boa.jpg " alt="boa" width="282 " height="500 ">
        <img src="photos/music/tvgril.jpg " alt="tvgirl " width="282 " height="500 ">
        <img src="photos/music/blur.jpg " alt="blur" width="282 " height="500 ">
        <img src="photos/music/kanye.jpg " alt=kanye" " width="282 " height="500 ">
        <img src="photos/music/deftones.jpg " alt="deftones " width="282 " height="500 ">
        <img src="photos/music/lamp.jpg " alt="lamp " width="282 " height="500 ">
        <img src="photos/music/thecure.jpg " alt="thecure " width="282 " height="500 ">
        <img src="photos/music/tvgril.jpg " alt="tvgirl " width="282 " height="500 ">
        <img src="photos/music/tylerthecreator.jpg " alt="tylerthecreator " width="282 " height="500 ">

    </div>

</div>

</div>

<div class="favoriteGames">
    <h3>My favorite games</h3>
    <hr class="line">

    <div class="scroll-container">
        <img src="photos/games/reddeadII.jpg " alt="  ">
        <img src="photos/games/littlenightmares.jpg " alt="  ">
        <img src="photos/games/subnautica.jpg " alt="  ">
        <img src="photos/games/detroitbecomehuman.jpg " alt="  ">
        <img src="photos/games/ori.jpg " alt="  ">
        <img src="photos/games/cuphead.jpg " alt="  ">
        <img src="photos/games/dontstarve.jpg " alt="  ">
        <img src="photos/games/lis.jpg " alt="  ">
        <img src="photos/games/portal 2.jpg " alt="  ">
        <img src="photos/games/hogwarts.jpg " alt="  ">
        <img src="photos/games/alicemadnessreturns.jpg" alt="alicemadnessreturns">

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
