<x-layout>
    {{-- Content --}}
    <section class="section has-text-right p-6">
        <h1 class="custom-title has-text-black">Blog.</h1>
    </section>

    <section class="section">
        @foreach($posts as $post)
            <div class="box">
                <h2>{{ $post['title'] }}</h2>
                <p>{{ $post['description'] }}</p>
                <a href="{{ route('posts.show', ['post' => $post['slug']]) }}">Read more</a>
            </div>
        @endforeach
    </section>
</x-layout>
