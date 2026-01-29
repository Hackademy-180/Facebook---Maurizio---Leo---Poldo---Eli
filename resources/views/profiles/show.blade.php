<x-layout>
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
        </section>
    </main>
</x-layout>