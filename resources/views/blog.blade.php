<x-layout>

    <x-slot:fileSpecificCssFolder>
        <?php include 'C:\Users\rosie\Documents\HBO-ICT\year 1\quarter 3\Frameworks Project 1\projects\portfolio-app\resources\css\blog.css'; ?>
    </x-slot:fileSpecificCssFolder>

    <x-slot:fileSpecificJsFolder> </x-slot:fileSpecificJsFolder>

    {{-- Content --}}
    <div class="header">
        <h1>Bl<span class="headerOutline">og.</span></h1>
    </div>

    <a href="{{ route('posts.create') }}" class="button is-primary">Create a New Blog Post</a>
    <br><br><br>


    <div>
        <ul>
            @foreach ($posts as $post)
                <div class="blogPostField">
                    <h2>{{ $post['title'] }}</h2>
                    <hr>
                    <p> {{ $post['excerpt'] }} </p>

                    <a href="{{ route('posts.show', $post) }}">
                        Read more
                    </a>
                </div>
            @endforeach
        </ul>
    </div>

</x-layout>
