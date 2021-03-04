@extends('layouts.app')

@section('content')
<h1>Comics from api</h1>

<div id="app">
    <comics-component></comics-component>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection