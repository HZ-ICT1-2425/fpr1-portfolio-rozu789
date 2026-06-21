<x-layout>
    <nav class="breadcrumb m-6" aria-label="breadcrumbs">
        <ul>
            <li><a href="{{ route('posts.index') }}">Blog</a></li>
            <li class="is-active"><a href="#" aria-current="page">{{ $post }}</a></li>
        </ul>
    </nav>

    <div class="box m-6">
        <h2>{{ $post }}</h2>
    </div>
</x-layout>
