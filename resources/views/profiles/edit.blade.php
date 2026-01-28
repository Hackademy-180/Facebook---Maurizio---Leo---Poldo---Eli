<x-layout>
    <main class="container">
    <section class="row">
        <article class="col-12">
            <h1>Modifica il mio Profilo</h1>
        </article>
        <article class="col-12">
            <form>
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   
                </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cognome</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Regione</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </article>
    </section>
</main>
</x-layout>