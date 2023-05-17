@extends('layouts.app')

@section('title')

    {{$dataComic->title}}
    
@section('content')

    <div class="row">
        <div class="card col-4 mx-auto p-2">
            <img src="{{$dataComic->thumb}}" class="card-img-top" alt="">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$dataComic->title}}</li>
                    <li class="list-group-item">Prezzo: {{$dataComic->price}}</li>
                    <li class="list-group-item">{{$dataComic->sale_date}}</li>
                </ul>
                <p>{{$dataComic->description}}</p>
            </div>
        </div>

        
    </div>
@endsection