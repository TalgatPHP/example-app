
@extends('layouts.app')

@section('hero')
    @include('app.partials.hero')
@endsection

@section('content')
    <div class="row mt-5">
        @foreach($films as $film)
            <div class="col-6 pb-3">
                <div class="card">
                    <img src="{{$film->poster}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$film->title}}</h5>
                        <a href="{{ route('film.show', $film->id) }}" class="btn btn-primary">Подробнее</a>
                        <div class="mt-4">
                            Жанры:
                            @foreach ($film->genres as $genre)
                                <a href="{{ route('film.genre', $genre->id) }}" class="badge bg-danger">{{$genre->title}}</a>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection