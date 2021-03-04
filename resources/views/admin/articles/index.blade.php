@extends('layouts.dashboard')

@section('content')
<h1>Comics Articles</h1>
<a href="{{route('admin.articles.create')}}"><button class="btn bg-primary">Crea un nuovo articolo</button></a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td scope="row">{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>
                <a href="{{route('admin.articles.show', ['article'=> $article->id] )}}" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                <a href="{{route('admin.articles.edit', ['article'=> $article->id] )}}" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>
                <!-- <a href="#" class="btn btn-danger"><i class="fas fa-trash fa-xs fa-fw"></i></a> -->
                <!-- Button trigger modal -->           
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{$article->id}}" ><i class="fas fa-trash fa-xs fa-fw"></i></button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="delete-{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="#delete-{{$article->id}}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="article-delete-{{$article->id}}">Delete article: {{$article->title}}</h5>
                            </div>
                            <div class="modal-body">
                                Sei sicuro?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{ route('admin.articles.destroy', $article->id) }}" class="col" method="POST">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>            
        </tr>
        @endforeach
    </tbody>
</table>
@endsection