@extends('layouts.dashboard')

@section('content')
<h1><strong>TITOLO: </strong>{{ $comic->title}}</h1>
<p><strong>DESCRIPTION: </strong>{{ $comic->body}}</p>

<p><strong>ART BY: </strong>{{ $comic->art_by}}</p>
<p><strong>WRITTEN BY: </strong>{{ $comic->written_by}}</p>
<p><strong>SERIES: </strong>{{ $comic->series}}</p>
<p><strong>PRICE: </strong>{{ $comic->price}}</p>
<p><strong>ON SALE DATE: </strong>{{ $comic->on_sale_date}}</p>
<p><strong>VOLUME: </strong>{{ $comic->volume}}</p>
<p><strong>TRIM SIZE: </strong>{{ $comic->trim_size}}</p>
<p><strong>PAGE: </strong>{{ $comic->page}}</p>
<p><strong>RATED: </strong>{{ $comic->rated}}</p>
<p><strong>CREATED: </strong>{{ $comic->created_at}}</p>
<p><strong>UPDATED: </strong>{{ $comic->updated_at}}</p>
@endsection

