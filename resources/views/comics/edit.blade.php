@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center">
        <h1>Modifica: {{ $comic->title }}</h1>

        <div class="return-on-comic">

            <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-secondary p-2 return-on-comic">
                <i class="bi bi-arrow-return-left"></i>
            </a>
        </div>

    </div>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf

        @method('put')

        <div class="input-group mb-3">
            <span class="input-group-text">Titolo</span>
            <input type="text" class="form-control" placeholder="Inserisci Titolo" name="title" value="{{ $comic->title }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Descrizione</span>
            <textarea type="text" class="form-control" cols="30" rows="3" placeholder="Inserisci Titolo"
                name="description"> {{ $comic->description }} </textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Prezzo</span>
            <input type="text" class="form-control" placeholder="inserisci prezzo..." name="price" value="{{ $comic->price }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Copertina</span>
            <input type="text" class="form-control" placeholder="inserisci foto copertina..." name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Serie</span>
            <input type="text" class="form-control" placeholder="inserisci la serie..." name="series" value="{{ $comic->series }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Data d'uscita:</span>
            <input type="date" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Tipo</span>
            <input type="text" class="form-control" placeholder="" name="type" value="{{ $comic->type }}">
        </div>

        <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill"></i></button>
    </form>
</div>


<script>
    const returnOnComic = document.querySelector(".return-on-comic");

    returnOnComic.addEventListener("click", function(e) {
        
        e.preventDefault();
        
        const message = confirm("Vuoi annullare le modifiche di questo prodotto e tornare alla sua visualizzazione?");

        if (message === true) {
            history.back();
        }

      })
</script>
@endsection