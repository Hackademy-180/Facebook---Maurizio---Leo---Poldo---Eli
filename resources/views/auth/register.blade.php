<x-layout>
    <main class="container">
        <section class="row">
            <div class="col-12">
                <h1 class="text-center lead display-2">Form di registrazione</h1>
                <form method="POST" action="{{route('register')}}">
                   @csrf
                   <div class="mb-3">
                       <label for="name" class="form-label"><strong>Nome utente</strong></label>
                       <input type="name" class="form-control" id="name" aria-describedby="emailHelp" name="name">
                   </div>
                   <div class="mb-3">
                       <label for="email" class="form-label"><strong>Email</strong></label>
                       <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                   </div>
                   <div class="mb-3">
                       <label for="password" class="form-label"><strong>Password</strong></label>
                       <input type="password" class="form-control" id="password" name="password">
                   </div>
                   <div class="mb-3">
                       <label for="password-confirmation" class="form-label"><strong>Conferma password</strong></label>
                       <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
                   </div>                  
                   <button type="submit" class="btn btn-primary">Registrati</button>
               </form>
            </div>
        </section>
    </main>
    
</x-layout> 
