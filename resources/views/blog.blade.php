<x-layout>

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
