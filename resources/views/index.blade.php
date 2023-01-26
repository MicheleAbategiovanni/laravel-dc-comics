@extends('layouts.app')


@section('content')


<div class="container py-5 text-end">
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi</a>
</div>

<div class="container py-5">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col ">
            <div class="card h-100">
                
                <div class="card-title">
                    <h4>Titolo: {{$comic->title}}</h4>
                </div>

                <div class="card-body">
                    <h4>Descrizione: {{$comic->description}}</h4>
                    <h4>Prezzo: {{$comic->price}}</h4>
                    <h4>Data Pubblicazione: {{date("d-m-Y", strtotime($comic['sale_date']))}}</h4>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection