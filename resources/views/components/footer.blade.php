<footer class="bg-light text-dark mt-5">
    <div class="container py-4">
        <div class="row align-items-center">
            <!-- Link e social -->
            <div class="col-md-6 mb-3">
                <div class="d-flex flex-wrap justify-content-between">
                    <div>
                        <h6 class="text-uppercase fw-bold">Creato da:</h6>
                        <ul class="list-unstyled mb-2">
                            <li><a href="#" class="text-dark text-decoration-none">Maurizio Catino</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Leonardo Lauria</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Elisabetta Petruzzi Merli</a></li>
                            <li><a href="#" class="text-dark text-decoration-none">Leopoldo Romano</a></li>

                        </ul>
                    </div>
                    <div class="text-center">
                        <h6 class="text-uppercase fw-bold align-items-center">Seguici</h6>
                        <a href="#" class="text-dark me-2"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-dark me-2"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-dark me-2"><i class="bi bi-youtube fs-5"></i></a>
                    </div>
                </div>
            </div>

{{--  Newsletter   --}}
        <div class="col-md-6 mb-3 d-flex flex-column align-items-end">
            <h6 class="text-uppercase fw-bold">Newsletter</h6>

            @if(session('success'))
                <div class="alert alert-success py-2 text-end">{{ session('success') }}</div>
            @endif

            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="w-100">
                @csrf

                <input type="email" name="email" class="form-control mb-2" placeholder="La tua email" required>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Iscriviti</button>
                </div>
            </form>

        </div>

        <hr>

        <div class="text-center py-2">
            @Uglybook. 
        </div>
    </div>
</footer>
