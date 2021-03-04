@extends('layouts.dashboard')

@section('content')
<h1><strong>TITOLO: </strong>{{ $article->title}}</h1>
<p><strong>DESCRIPTION: </strong>{{ $article->body}}</p>
@if($article->cover)
    <img src="{{asset('storage/' . $article->cover)}}" alt="">
@endif
<p><strong>MESSAGE: </strong>{{ $article->message}}</p>
@endsection

