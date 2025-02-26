<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    <style>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\main.css'; ?>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\index.css'; ?>
    </style>

    <script>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\js\main.js'; ?>
    </script>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
{{-- Navigation bar --}}
<x-NavBar />

{{-- Content --}}
<div class="header">
    <h1>Home.</h1>
</div>

<div id="indexMotivationText">
    <h2>My motivation</h2>
    <p>
        I believe ICT is a great fit fo rme because it connects with so many things I've been passionate about since I was young,
        especially problem-solving, technology, and video games. From the time i was in elementry school all the way through highschool,
        math was always my favorite subject. I loved and still love sitting down with a problem and taking it apart until i figure out how to fix it.
        Video games played a huge role in sparking my interest in tech. I've always loved playing them but the older I got the more interested I got  into how
        they actaully work. That thought prossess led me to think about not just video games but how every aspect of computers work.Even though i
        was already curious i didn't do a whole lot of research into it, but when I took computer class as a subject in highschool i realized
        that this was actaully something i found interesting enough to do for a long time. Other than math, it was the first time i found myself
        actually excited to work on school projects.
    </p>

    <p>
        Overall, I've never really doubted that ICT was going to be the right fit for me, and i still don't. As im writing this ive already been
        going to school for  a few weeks now and i still find working on checkpoints, workshops and week project super interesting. Even when i get stuck
        on an excersize it just makes me more eager to finish the puzzel. I'm excited to keep improving my skills and figure out how i can use those skills
        in my future.
    </p>
</div>

<div id="legoBatmanImgShowcase">
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="{{ asset('images/legobatman1.JPG') }}" alt="Lego Batman">
            <div class="text">me being non-chalant and mysterious</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="{{ asset('images/legobatman2.JPG') }}" alt="Lego Batman">
            <div class="text">me watching over gotham city</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="{{ asset('images/legobatman3.JPG') }}" alt="Lego Batman">
            <div class="text">me trowing down some sick beats</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
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
