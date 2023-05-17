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
                            <form method="POST" action="{{route('comics.destroy', ['comic' => $comic->id])}}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
                            </form> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection