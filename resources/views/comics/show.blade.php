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
                <h6 class="card-text">{{$comic->price}}</h6>
                <p class="card-text">{{$comic->description}}</p>
                <a href="{{route('comics.index')}}" class="btn btn-info">Torna alla lista fumetti</a>
            </div>
        </div>
    </div>
@endsection