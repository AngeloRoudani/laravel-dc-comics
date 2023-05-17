@extends('layouts.app')

@section('title','New Comic')
    
@section('content')

    
    <div class="row justify-content-between">

        <form action="{{route('comics.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="url" class="form-label">Inserisci url</label>
                <input type="text" id="url" name="url" class="form-control">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Inserisci titolo Fumetto</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci prezzo</label>
                <input type="text" id="price" name="price" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="sale" class="form-label">Inserisci data</label>
                <input type="text" id="sale" name="sale"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Inserisci descrizione</label>
                <input type="text" id="description" name="description"  class="form-control">
            </div>

            <button type="submit">Crea</button>
        </form>

    </div>
    
@endsection