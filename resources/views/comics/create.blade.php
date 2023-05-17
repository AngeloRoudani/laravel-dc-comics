@extends('layouts.app')

@section('title','New Comic')
    
@section('content')

    
    <div class="row justify-content-between">

        <form action="{{route('comics.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="url">Inserisci url</label>
                <input type="text" id="url" name="url">
            </div>
            <div class="mb-3">
                <label for="title">Inserisci titolo Fumetto</label>
                <input type="text" id="title" name="title" >
            </div>
            <div class="mb-3">
                <label for="price">Inserisci prezzo</label>
                <input type="text" id="price" name="price" >
            </div>
            <div class="mb-3">
                <label for="sale">Inserisci data</label>
                <input type="text" id="sale" name="sale" >
            </div>
            <div class="mb-3">
                <label for="description">Inserisci descrizione</label>
                <input type="text" id="description" name="description" >
            </div>

            <button type="submit">Crea</button>
        </form>

    </div>
    
@endsection