@extends('layouts.app')

@section('page-title', 'Lista Fumetti')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h4 class="card-title mb-3">{{$comic->title}}</h4>
                            <h6 class="card-text">{{$comic->price}}</h6>
                            <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Info fumetto</a>
                            <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-secondary">Modifica</a>
                   
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                    Launch static backdrop modal
                                </button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        ...
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Cancella Articolo</button>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                          
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection