@extends('layouts.app')

@section('content')
<div class="comics_vue">

        <h1>COMICS & GRAPHIC NOVELS</h1>

    <div class="lista_uscite">
        <ul>
            <li><a href="#"></a>THIS WEEK</li>
            <li><a href="#"></a>LAST WEEK</li>
            <li><a href="#"></a>NEXT WEEK</li>
            <li><a href="#"></a>UP COMING</li>
            <li><a href="#"></a>SEE ALL</li>
        </ul>
    </div>
    
    <div id="app">
        <comics-component></comics-component>
    </div>

</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection