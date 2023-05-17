@extends('layouts.app')

@section('title','Modify')
    
@section('content')

    <div class="container">
        <div class="row justify-content-between">

            <form action="{{route('comics.update',['comic'=> $comic->id])}}" method="POST">
            @csrf
            @method('PATCH')

                <div class="mb-3">
                    <label for="url" class="form-label">Modifica url</label>
                    <input type="text" id="url" name="url" class="form-control" value="{{$comic->thumb}}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Modifica titolo Fumetto</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$comic->title}}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Modifica prezzo</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{$comic->price}}">
                </div>
                <div class="mb-3">
                    <label for="sale" class="form-label">Modifica data</label>
                    <input type="text" id="sale" name="sale"  class="form-control" value="{{$comic->sale_date}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Modifica descrizione</label>
                    <input type="text" id="description" name="description"  class="form-control" value="{{$comic->description}}">
                </div>

                <button type="submit">Modifica</button>
            </form>

        </div>
    </div>
    
@endsection