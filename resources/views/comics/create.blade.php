@extends('layouts.app')

@section('title','New Comic')
    
@section('content')

    <div class="container">
        <div class="row justify-content-between">

            <form action="{{route('comics.store')}}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="thumb" class="form-label">Inserisci url</label>
                    <input type="text" id="thumb" name="thumb" class="form-control" value="{{ old('thumb') }}">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Inserisci titolo Fumetto</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Inserisci prezzo</label>
                    <input type="text" id="price" name="price" class="form-control" value="{{ old('price') }}">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Inserisci data</label>
                    <input type="text" id="sale_date" name="sale_date"  class="form-control" value="{{ old('sale_date') }}">
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Inserisci descrizione</label>
                    <textarea type="text" id="description" name="description"  class="form-control">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Crea</button>
            </form>

        </div>
    </div>
    
@endsection