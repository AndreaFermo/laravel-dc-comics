@extends('layouts.app')

@section('page-title')
   Comic: {{$comic->title}}
@endsection

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card col-4">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
                <h3 class="card-title mb-3">{{$comic->series}}</h3>
                <h4 class="card-title mb-3">{{$comic->title}}</h4>
                <p class="card-text">{{$comic->sale_date}}</p>
                <h6 class="card-text">{{$comic->price}}</h6>
                <p class="card-text">{{$comic->description}}</p>
                <a href="{{route('comics.index')}}" class="btn btn-info mb-3">Torna alla lista fumetti</a>
                <form action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella Articolo</button>
                </form>
            </div>
        </div>
    </div>
@endsection