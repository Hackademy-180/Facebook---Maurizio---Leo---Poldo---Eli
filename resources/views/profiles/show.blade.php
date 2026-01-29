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
                <h2>Nome:{{$profile->name}}</h2>
                <h2>Cognome:{{$profile->surname}}</h2>
                <h2>Regione:{{$profile->region}}</h2>
            </article>
            <a href="{{route("edit_profile", compact("profile"))}}" class="btn btn-warning">Modifica</a>
        </section>
    </main>
</x-layout>