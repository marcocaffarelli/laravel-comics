<body>
    <div class="edit d-flex">
        <h1>EDIT</h1>
        <div class="container_form d-flex">
            <form action="{{route('admin.comics.update', ['comic'=> $comic->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">TITOLO</label><br>
                    <input type="text" id="title" name="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">
                </div>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="body">BODY</label><br>
                    <textarea name="body" id="body" cols="30" rows="5" placeholder="inserisci il testo">{{$comic->body}}</textarea>
                </div>
                @error('body')
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
                <div>
                    <label for="art_by">ART BY</label><br>
                    <input type="text" id="art_by" name="art_by" placeholder="Art by" value="{{$comic->art_by}}">
                </div>
                @error('art_by')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="written_by">WRITTEN BY</label><br>
                    <input type="text" id="written_by" name="written_by" placeholder="Written by" value="{{$comic->written_by}}">
                </div>
                @error('written_by')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="series">SERIES</label><br>
                    <input type="text" id="series" name="series" placeholder="Series" value="{{$comic->series}}">
                </div>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="price">PRICE</label><br>
                    <input type="number" id="price" name="price" step=".01" value="{{$comic->price}}">
                </div>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="on_sale_date">ON SALE DATE</label><br>
                    <input type="date" id="on_sale_date" name="on_sale_date" value="{{$comic->on_sale_date}}">
                </div>
                @error('on_sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="volume">VOLUME</label><br>
                    <input type="number" id="volume" name="volume" placeholder="Inserisci il volume" value="{{$comic->volume}}">
                </div>
                @error('volume')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="trim_size">TRIM SIZE</label><br>
                    <input type="text" id="trim_size" name="trim_size" placeholder="Trime size" value="{{$comic->trim_size}}">
                </div>
                @error('trim_size')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="page">PAGE</label><br>
                    <input type="number" id="page" name="page" placeholder="Page" value="{{$comic->page}}">
                </div>
                @error('page')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div>
                    <label for="rated">RATED</label><br>
                    <input type="radio" id="rated" name="rated" value="All ages" checked> All ages<br>
                    <input type="radio" id="rated" name="rated" value="Teen"> Teen<br>
                    <input type="radio" id="rated" name="rated" value="Parental advisory"> Parental advisory<br>
                    <input type="radio" id="rated" name="rated" value="Explicit content"> Explicit content
                </div>
                @error('rated')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn bg-primary">SUBMIT</button>
                
            </form>
        </div>
    </div>
</body>