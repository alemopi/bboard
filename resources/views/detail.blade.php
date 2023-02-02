@extends('layouts.base')

@section('title', $bb->title)

@section('main')
<h2>{{ $bb->title }}</h2>
<p>{{ $bb->content }}</p>
<p>{{ $bb->price }} US dollars</p>
<p>Foreman {{ $bb->user->name }}</p>
<p><a href="{{ route('index') }}">To the list of other orders</a></p>
@endsection('main')
