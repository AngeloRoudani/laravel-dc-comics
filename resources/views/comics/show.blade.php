@extends('layouts.app')

@section('title')

    {{$comic->title}}
    
@endsection
    
@section('content')

    <div class="row">
        <div class="card col-4 mx-auto p-2">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="">
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$comic->title}}</li>
                    <li class="list-group-item">Prezzo: {{$comic->price}}</li>
                    <li class="list-group-item">{{$comic->sale_date}}</li>
                </ul>
                <p>{{$comic->description}}</p>
            </div>
        </div>
    </div>
@endsection