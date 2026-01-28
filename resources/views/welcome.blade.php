<x-layout>
    <div class="container mt-4">
        @auth
        <div class="mb-3 text-end">
            <a href="{{ route('create_post') }}" class="btn btn-primary">Crea Post</a>
        </div>    
        @endauth

        @foreach($posts as $post)
            <div class="card shadow-sm mb-3" data-aos="fade-right" style="border-radius: 10px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <img src="{{ asset('storage/' . $post->img) }}" class="img-fluid rounded mb-2" >
                    <a class="btn btn-custom" href="{{route("edit_post",compact("post"))}}">Modifica post</a>
                <form method="POST" action="{{route("delete_post",compact("post"))}}">
                    @csrf
                    @method("delete")
                    <button type="submit" class="btn btn-delete">Elimina post</button>
                </form>
                </div>
            </div>
        @endforeach

    </div>
</x-layout>
