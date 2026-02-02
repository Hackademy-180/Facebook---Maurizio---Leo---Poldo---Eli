<x-layout>
    <header class="header-custom text-center ">i nostri post</header>
    <main class="container my-3 ">
            @foreach($posts as $post)
                <article class="row mt-3">
                    <div class="col-12 col-md-4 col-custom1 ">
                        <p class="card-text">{{ $post->description }}</p>
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </div>
                    <div class="col-12 col-md-4 ">
                        <img src="{{ asset('storage/' . $post->img) }}" class="img-fluid rounded mb-2 img-custom1" >
                    </div>
                    <div class="col-12 col-md-4 d-flex flex-column align-items-center col-custom2">
                        <x-button_leggi_commenti :post="$post" />
                        @if(Auth::user())
                        <x-button_commenta :post="$post" />
                        @endif
                        @if(Auth::user() &&  Auth::user()->id == $post->user_id)
                        <x-button_modifica_post :post="$post" />
                        <form method="POST" action="{{route("delete_post",compact("post"))}}">
                            @csrf
                            @method("delete")
                            <x-button_elimina_post :post="$post" />
                        </form>
                        @endif
                    </div>
                    
                </article>
                @endforeach
        
            
            <main class="container-fluid my-3">
                
                <div class="row">
                    
                    
                    <!-- SIDEBAR SINISTRA (FISSA A SINISTRA) -->
                    <aside class="col-md-3 col-lg-2 d-none d-md-block sidebar-left ms-5">
                        <div class="pt-3 position-sticky top-0">
                            <ul class="nav flex-column gap-2">
                                <li><a href="{{route('home')}}" class="nav-link nav-link-custom">🏠 Home</a></li>
                                <li><a href="#" class="nav-link nav-link-custom">👥 Amici</a></li>
                                <li><a href="#" class="nav-link nav-link-custom">📅 Eventi</a></li>
                                <li><a href="#" class="nav-link nav-link-custom">⚙️ Impostazioni</a></li>
                            </ul>
                        </div>
                    </aside>
                    
                    <!-- FEED (CENTRATO DAVVERO) -->
                    @foreach($posts as $post)
                    <section class="col-12 col-md-3  offset-md-1">
                        
                            
                            <div class="card shadow-sm mb-3 card-custom ">
                                <div class="card-body post-custom ">
                                    <h5>{{ $post->title }}</h5>
                                    <p>{{ $post->description }}</p>
                                    <img src="{{ asset('storage/'.$post->img) }}" class="img-fluid rounded mb-2">
                                </div>
                            </div>
                            
                      
                    </section>
                    @endforeach
                    
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
        