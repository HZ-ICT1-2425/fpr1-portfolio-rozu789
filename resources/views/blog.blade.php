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
<x-NavBar />

{{-- Content --}}
<h1>Blog Posts</h1>
<ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post['slug']) }}">
                {{ $post['title'] }}
            </a>
        </li>
    @endforeach
</ul>



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
