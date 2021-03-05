@extends('layouts.app')

@section('content')
<div class="single_comic">
    <div class="background_image" style="background-image: url({{asset('storage/' . $comic->cover)}}); background-size:cover; background-position: top;">
        @if($comic->cover)
            <img src="{{asset('storage/' . $comic->cover)}}" alt="">
        @endif
    </div>
    <div class="parte_centrale">
        <h1>{{ $comic->title}}</h1>
        <div class="container_green d-flex">
            <div class="price d-flex">
                <div>
                    U.S. Price: ${{$comic->price}}
                </div>
                <div class="available_single">
                    AVAILABLE
                </div>
            </div>
            <div class="check_availability">
                Check Availability <i class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div>{{ $comic->body}}</div>
    </div>
    <div class="container_informazioni d-flex">
        <div class="talent">
            <h3>Talent</h3>
            <div><strong>Art by: </strong>{{$comic->art_by}}</div>
            <div><strong>Written by: </strong>{{$comic->written_by}}</div>
        </div>
        <div class="specs">
            <h3>Specs</h3>
            <div class="title_info"><strong>Series: </strong>{{ $comic->series}}</div>
            <div><strong>U.S: Price: </strong>{{ $comic->price}}</div>
            <div><strong>On Sale Date: </strong>{{ $comic->on_sale_date}}</div>
            <div><strong>Volume/Issue #: </strong>{{ $comic->volume}}</div>
            <div><strong>Trim Size: </strong>{{ $comic->trim_size}}</div>
            <div><strong>Page Count: </strong>{{ $comic->page}}</div>
            <div><strong>Rated: </strong>{{ $comic->rated}}</div>
        </div>

    </div>

</div>
@endsection

