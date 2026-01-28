<x-layout>
    <h1 class="text-center">{{$post->title}}</h1>
    <main class="container">
        <section class="row">
            <article class="col-12 col-md-8 ms-2">
                <p>{{$post->description}}</p>
               <img src="{{ asset('storage/' . $post->img) }}" alt="">
            </article>
        </section>
    </main>
</x-layout>