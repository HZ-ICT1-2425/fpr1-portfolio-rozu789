<x-layout>
    <div class="box">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <h1 class="title is-4">Title above page</h1>

            <br>

            <h2 class="subtitle is-6 is-italic">
                Subtitle
            </h2>

            {{-- Input field --}}
            <div class="field">
                <label for="column1" class="label">title-above-input-bar</label>

                <div class="control has-icons-right">
                    <input type="text" name="column1" placeholder="placeholder-text"
                           class="input @error('column1') is-danger @enderror"
                           value="{{ old('column1') }}" autocomplete="column1" autofocus>

                    @error('column1')
                    <span class="icon has-text-danger is-small is-right">
                       <i class="fas fa-exclamation-triangle"></i>
                   </span>
                    @enderror
                </div>

                @error('column1')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</x-layout>
