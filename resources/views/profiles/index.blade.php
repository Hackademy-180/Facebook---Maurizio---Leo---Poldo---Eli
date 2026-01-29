<x-layout>
    
    <main class="container">
        <section class="row">
            <article class="col-12">
                <h1 class="text-center">Crea il tuo Profilo</h1>
            </article>
            <article class="col-12">
                <form action="{{route("store_profile")}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                        
                    </div>
                      <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="surname" aria-describedby="emailHelp" name="surname">
                        
                    </div>
                      <div class="mb-3">
                        <label for="region" class="form-label">Regione</label>
                        <input type="text" class="form-control" id="region" aria-describedby="emailHelp" name="region">
                        
                    </div>
                  
                   <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </article>
        </section>
        
        
    </main>   
    
</x-layout>