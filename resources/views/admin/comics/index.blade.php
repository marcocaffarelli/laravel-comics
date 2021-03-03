@extends('layouts.dashboard')

@section('content')
<h1>Comics</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Series</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td scope="row">{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->series}}</td>
            <td>
                <a href="#" class="btn btn-primary"><i class="fas fa-eye fa-xs fa-fw"></i></a>
                <a href="#" class="btn btn-warning"><i class="fas fa-pencil-ruler fa-xs fa-fw"></i></a>
                <a href="#" class="btn btn-danger"><i class="fas fa-trash fa-xs fa-fw"></i></a>
            </td>        
        </tr>
        @endforeach
    </tbody>
</table>
@endsection