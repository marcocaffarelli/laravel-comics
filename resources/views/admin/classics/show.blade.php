@extends('layouts.dashboard')

@section('content')
<h1><strong>TITOLO: </strong>{{ $classic->title}}</h1>

@if($classic->cover)
    <img src="{{asset('storage/' . $classic->cover)}}" alt="">
@endif

@endsection

