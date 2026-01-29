<x-layout>
    <main class="container d-flex justify-content-center my-3 ">
        <section class="row flex-column">
            @foreach($posts as $post)
            <div class="card shadow-sm mb-3 card-custom" data-aos="fade-right" style="border-radius: 10px;">
                <div class="card-body ">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <img src="{{ asset('storage/' . $post->img) }}" class="img-fluid rounded mb-2" >
                    <x-button_leggi_commenti :post="$post" />
                    @if(Auth::user() && Auth::user()->id == $post->user_id)
                   <x-button_commenta :post="$post" />
                    <x-button_modifica_post :post="$post" />
                        <form method="POST" action="{{route("delete_post",compact("post"))}}">
                            @csrf
                            @method("delete")
                           <x-button_elimina_post :post="$post" />
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
<main class="container-fluid my-3">

    <div class="row">
       

        <!-- SIDEBAR SINISTRA (FISSA A SINISTRA) -->
        <aside class="col-md-3 col-lg-2 d-none d-md-block sidebar-left ms-5">
            <div class="pt-3 position-sticky top-0">
                <ul class="nav flex-column gap-2">
                    <li><a href="{{route('home')}}" class="nav-link nav-link-custom">🏠 Home</a></li>
                    {{-- @if(Auth::user()->profile() != "")
                    <a href="{{route("show_profile", ["profile"=>Auth::user()->profile->id])}}" class="list-group-item list-group-item-action py-3 px-3">Visualizza Profilo</a>
                    @endif --}}
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
