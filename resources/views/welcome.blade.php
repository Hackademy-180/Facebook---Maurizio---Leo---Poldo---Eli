<x-layout>
    <div class="container mt-4">

        <div class="mb-3 text-end">
            <a href="{{ route('create_post') }}" class="btn btn-primary">Crea Post</a>
        </div>

        @foreach($posts as $post)
            <div class="card shadow-sm mb-3" style="border-radius: 10px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>

                        <img src="{{ asset('storage/' . $post->img) }}" class="img-fluid rounded mb-2" >
                </div>
            </div>
        @endforeach

    </div>
</x-layout>
