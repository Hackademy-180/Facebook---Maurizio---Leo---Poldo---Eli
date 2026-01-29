<x-layout>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <main class="container">
        <section class="row">
            <article class="col-12">
                <h1 class="text-center">Dettaglio Profilo</h1>
            </article>
            <article class="col-12">
                <h2>Nome:</h2><p>{{$profile->name}}</p>
                <h2>Cognome:</h2><p>{{$profile->surname}}</p>
                <h2>Regione:</h2><p>{{$profile->region}}</p>
                <h2>Biografia:</h2><p>{{$profile->bio}}</p>
                
            </article>
            <a href="{{route("edit_profile", compact("profile"))}}" class="btn btn-warning">Modifica</a>
        </section>
    </main>
</x-layout>