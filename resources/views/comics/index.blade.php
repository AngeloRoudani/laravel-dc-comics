@extends('layouts.app')

@section('title','Our Comics')
    
@section('content')

    
    <div class="row">
        @foreach ($comics as $comic )

        <div class="card col-3">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$comic->title}}</li>
                    <li class="list-group-item">Prezzo: {{$comic->price}}</li>
                    <li class="list-group-item">{{$comic->sale_date}}</li>
                </ul>
            </div>
            <a class="btn btn-success" 
                href="{{route('comics.show', ['comic' => $comic->id])}}">  
                Compra
            </a>
        </div>

        @endforeach
    </div>
    
@endsection