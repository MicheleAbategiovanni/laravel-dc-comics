@extends('layouts.app')

@section('content')

<h1>{{ $comic->title }} (#{{ $comic->id }})</h1>
<p class="lead">{{ $comic->description }}</p>
<ul>
    <li><strong>Prezzo:</strong> {{ $comic->price }}</li>
    <li><strong>Data creazione:</strong> {{ $comic->created_at }}</li>
    <li><strong>Data ultima modifica:</strong> {{ $comic->updated_at }}</li>
</ul>

@endsection