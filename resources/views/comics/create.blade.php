@extends('layouts.app')

@section('content')

<div class="container py-5">

    <h1>Creazione nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf


        <div class="input-group mb-3">
            <span class="input-group-text">Titolo</span>
            <input type="text" class="form-control" placeholder="Inserisci Titolo" name="title">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Descrizione</span>
            <textarea type="text" class="form-control" cols="30" rows="3" placeholder="Inserisci Titolo"
                name="description"> </textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Prezzo</span>
            <input type="text" class="form-control" placeholder="inserisci prezzo..." name="price">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Copertina</span>
            <input type="text" class="form-control" placeholder="inserisci foto copertina..." name="thumb">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Serie</span>
            <input type="text" class="form-control" placeholder="inserisci la serie..." name="series">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Data d'uscita:</span>
            <input type="date" class="form-control" name="sale_date">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Tipo</span>
            <input type="text" class="form-control" placeholder="" name="type">
        </div>

        <button class="btn btn-primary" type="submit">Salva prodotto</button>
    </form>
</div>


@endsection