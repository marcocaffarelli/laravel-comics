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

                <button type="submit" class="btn bg-primary">SUBMIT</button>                  
            </form>
        </div>
    </div>
</body>