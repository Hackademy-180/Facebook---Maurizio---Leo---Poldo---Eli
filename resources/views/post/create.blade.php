<x-layout>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm mb-4 mt-5 " data-aos="fade-up">
                <div class="card-header">Crea un nuovo post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('store_post') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo</label>
                            <input type="text" name="title" id="title" class="form-control"  value="" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea name="description"  id="description" rows="3"  class="form-control" required ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Immagine (facoltativa)</label>
                            <input  type="file"  name="img" id="img" class="form-control" accept="image/*">
                  
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-custom-1">Pubblica</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
