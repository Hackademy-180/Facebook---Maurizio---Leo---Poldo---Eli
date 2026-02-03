<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 edit-post">
            <div class="card shadow-sm mb-4">
                <div class="card-header">Modifica il post</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update_comment',compact("comment")) }}" enctype="multipart/form-data">
                        @csrf
                        @method("put")
                        <div class="mb-3">
                            <label for="description" class="form-label">modifica commento</label>
                            <textarea name="description"  id="description" rows="4" class="form-control" >{{$comment->description}}</textarea>
                            @error('description')
                            <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-custom-1">Modifica</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
