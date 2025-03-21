<x-layout>

    <x-slot:fileSpecificCssFolder>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\profile.css'; ?>
    </x-slot:fileSpecificCssFolder>

    <x-slot:fileSpecificJsFolder> </x-slot:fileSpecificJsFolder>

    {{-- Content --}}
    <div class="header">
        <h1>Pro<span class="headerOutline">file.</span></h1>
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



</x-layout>
