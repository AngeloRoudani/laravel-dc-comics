@extends('layouts.app')

@section('title','Modify')
    
@section('content')

    <div class="container">
        <div class="row justify-content-between">

            <form action="{{route('comics.update',['comic'=> $comic->id])}}" method="POST">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="thumb" class="form-label">Modifica url</label>
                    <input type="text" id="thumb" name="thumb" class="form-control" value="{{old('thumb') ? old('thumb') : $comic->thumb}}">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Modifica titolo Fumetto</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{old('title') ? old('title') : $comic->title}}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Modifica prezzo</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{old('price') ? old('price') : $comic->price}}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Modifica data</label>
                    <input type="text" id="sale_date" name="sale_date"  class="form-control" value="{{old('sale_date') ? old('sale_date') : $comic->sale_date}}">
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Modifica descrizione</label>
                    <textarea type="text" id="description" name="description"  class="form-control" >{{old('description') ? old('description') : $comic->description}}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Modifica</button>
            </form>

        </div>
    </div>
    
@endsection