<body>
    <div class="edit d-flex">
        <h1>EDIT</h1>
        <div class="container_form d-flex">
            <form action="{{route('admin.articles.update', ['article'=> $article->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">TITOLO</label><br>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo" value="{{$article->title}}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="body">BODY</label><br>
                    <textarea name="body" id="body" cols="30" rows="5" placeholder="inserisci il testo">{{$article->body}}</textarea>
                </div>
                @error('body')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="message">MESSAGE</label><br>
                    <input type="text" id="message" name="message" placeholder="Art by" value="{{$article->message}}">
                </div>
                @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <button type="submit" class="btn bg-primary">SUBMIT</button>                  
            </form>
        </div>
    </div>
</body>