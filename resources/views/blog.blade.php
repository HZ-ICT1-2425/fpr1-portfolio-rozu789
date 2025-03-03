<x-layout>

    <x-slot:fileSpecificCssFolder>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\blog.css'; ?>
    </x-slot:fileSpecificCssFolder>

    <x-slot:fileSpecificJsFolder> </x-slot:fileSpecificJsFolder>

    {{-- Content --}}
    <div class="header">
        <h1>Bl<span class="headerOutline">og.</span></h1>
    </div>

    <div>
        <ul>
            @foreach ($posts as $post)
                <div class="blogPostField">
                    <h2>{{ $post['title'] }}</h2>
                    <hr>
                    <p> {{ $post['description'] }} </p>

                    <a href="{{ route('posts.show', $post['slug']) }}">
                        Read more
                    </a>
                </div>
            @endforeach
        </ul>
    </div>

</x-layout>
