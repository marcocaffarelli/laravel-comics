<body>
    <div class="edit d-flex">
        <h1>EDIT</h1>
        <div class="container_form d-flex">
            <form action="{{route('admin.classics.update', ['classic'=> $classic->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">TITOLO</label><br>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo" value="{{$classic->title}}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                 <div class="form-group">
                  <label for="cover"></label>
                  <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Inserisci un immagine" aria-describedby="fileHelpId">
                  <small id="coverHelper" class="form-text text-muted">Inserisci un immagine</small>
                </div>
                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <button type="submit" class="btn bg-primary">SUBMIT</button>                  
            </form>
        </div>
    </div>
</body>