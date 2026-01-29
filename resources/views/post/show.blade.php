<x-layout>
    <h1 class="text-center">{{$post->title}}</h1>
    <main class="container">
        <section class="row">
            <article class="col-12 col-md-8 ms-2">
                <p>{{$post->description}}</p>
<<<<<<< HEAD
               <img src="{{ asset('storage/' . $post->img) }}" alt="">
              @foreach ($post->comments as $comment)
              {{$comment->description}}    
              @endforeach 
=======
               <img src="{{ asset('storage/' . $post->img) }}" alt="" class="img-custom">
>>>>>>> f663e0c4c4ea13b25aa86b96ef9d3906b6d0bf39
            </article>
        </section>
    </main>
</x-layout>