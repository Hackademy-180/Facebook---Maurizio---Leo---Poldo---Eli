<x-layout>
    <main class="container">
        <section class="row">
            <article class="col-12">
                <h1>Modifica Profilo</h1>
            </article>
            <article class="col-12">
                <form action="{{route("update_profile", compact("profile"))}}" method="POST">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="name" class="form-label">Nuovo Nome</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" value="{{$profile->name}}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Nuovo Cognome</label>
                        <input type="text" class="form-control" id="surname" aria-describedby="emailHelp" name="surname" value="{{$profile->surname}}">
                        
                    </div>
                    <div class="mb-3">
                        <label for="region" class="form-label">Nuova Regione</label>
                        <input type="text" class="form-control" id="region" aria-describedby="emailHelp" name="region" value="{{$profile->region}}">
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
    </main>
</x-layout>