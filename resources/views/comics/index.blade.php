@extends('layouts.app')

@section('title','Our Comics')
    
@section('content')

    <!--creazione cards-->
    <div class="row justify-content-between">
        @foreach ($comics as $comic )

        <div class="card col-3 m-2 p-1">

            <img src="{{$comic->thumb}}" class="card-img-top" alt="immagine">
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
            <a class="btn btn-secondary mt-1" 
                href="{{route('comics.edit', ['comic' => $comic->id])}}">  
                Modifica
            </a>
                <button type="submit" class="btn btn-danger mt-1 d-block w-100" id="delete">
                    Elimina
                </button>

            <!--inizio modal per richiesta autorizzazione delete-->

            <div class="modal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Richiesta Autorizzazione</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Sei sicuro di voler cancellare il fumetto?</p>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annulla</button>
                            <!--button del destroy-->
                            <form action="{{route('comics.destroy',['comic' => $comic->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-1 d-block w-100">
                                    Elimina
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        @endforeach
    </div>
    
@endsection