<body>
    <div class="create d-flex">
        <h1>NEW CLASSIC</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container_form d-flex">
            <form action="{{route('admin.classics.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="title">TITOLO</label><br>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div>
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