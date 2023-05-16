@extends('layouts.app')

@section('title')

    {{$dataComics->title}}
    
@section('content')

    <div class="row">
        <div class="card col-6">
            <img src="{{$dataComics->thumb}}" class="card-img-top" alt="">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$dataComics->title}}</li>
                    <li class="list-group-item">Prezzo: {{$dataComics->price}}</li>
                    <li class="list-group-item">{{$dataComics->sale_date}}</li>
                </ul>
                <p>{{$dataComics->description}}</p>
            </div>
        </div>

        
    </div>
@endsection