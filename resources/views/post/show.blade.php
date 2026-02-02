<x-layout>
    <h1 class="text-center h1-custom">{{$post->title}}</h1>
    <main class="container">
        <section class="row">
            <article class="col-12 col-md-8 ms-2 ">
                <p>{{$post->description}}</p>
                <img src="{{ asset('storage/' . $post->img) }}" alt="" class="img-custom">
                @foreach ($post->comments as $comment)
                <article class="col-12 col-md-10 article-custom">
                    {{Auth::user()->name}} ha commentato:
                    <p>
                        {{$comment->description}}    
                    </p>
                </article>
                @endforeach 
            </article>
        </section>
    </main>
</x-layout>