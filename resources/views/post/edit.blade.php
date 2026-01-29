<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 edit-post">
            <div class="card shadow-sm mb-4">
                <div class="card-header">Modifica il post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update_post',compact("post")) }}" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="mb-3">
                            <label for="title" class="form-label">Nuovo titolo</label>
                            <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control"  value="" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">nuova descrizione</label>
                            <textarea name="description"  id="description" rows="4" class="form-control" required >{{$post->description}}</textarea>
                 
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Immagine (facoltativa)</label>
                            <input  type="file"  name="img" id="img" class="form-control" accept="image/*">
                  
                        </div>

                        <button type="submit" class="btn btn-primary btn-custom-1">Modifica</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
