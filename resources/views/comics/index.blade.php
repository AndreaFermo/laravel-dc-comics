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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection