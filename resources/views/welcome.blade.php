<x-layout>
<main class="container-fluid my-3">

    <div class="row">

        <!-- SIDEBAR SINISTRA (FISSA A SINISTRA) -->
        <aside class="col-md-3 col-lg-2 d-none d-md-block sidebar-left ms-5">
            <div class="pt-3 position-sticky top-0">
                <ul class="nav flex-column gap-2">
                    <li><a href="{{route('home')}}" class="nav-link nav-link-custom">🏠 Home</a></li>
                    <li><a href="{{route('index_profile')}}" class="nav-link nav-link-custom">👤 Profilo</a></li>
                    <li><a href="#" class="nav-link nav-link-custom">👥 Amici</a></li>
                    <li><a href="#" class="nav-link nav-link-custom">📅 Eventi</a></li>
                    <li><a href="#" class="nav-link nav-link-custom">⚙️ Impostazioni</a></li>
                </ul>
            </div>
        </aside>

        <!-- FEED (CENTRATO DAVVERO) -->
        <section class="col-12 col-md-6 col-lg-5 offset-md-1">
            <div class="feed-wrapper">

                @foreach($posts as $post)
                <div class="card shadow-sm mb-3">
                    <div class="card-body post-custom">
                        <h5>{{ $post->title }}</h5>
                        <p>{{ $post->description }}</p>
                        <img src="{{ asset('storage/'.$post->img) }}" class="img-fluid rounded mb-2">
                    </div>
                </div>
                @endforeach

            </div>
        </section>

    </div>

    @auth
    <div class="position-fixed bottom-0 end-0 m-4">
        <a href="{{ route('create_post') }}" class="btn btn-primary rounded-pill">
            Crea Post
        </a>
    </div>
    @endauth

</main>
</x-layout>
