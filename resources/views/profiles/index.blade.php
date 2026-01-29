<x-layout>
    
    <main class="container">
        <section class="row justify-content-center">
            <article class="col-12">
                <h1 class="text-center display-2 lead">Crea il tuo Profilo</h1>
            </article>
            <article class="col-12 article-custom">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
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
                  
                    <button type="submit" class="btn btn-primary btn-custom-1">Crea</button>
                </form>
                    </div>
                </div>
            </article>
        </section>
        
        
    </main>   
    
</x-layout>