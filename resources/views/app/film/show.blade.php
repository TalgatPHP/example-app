@extends('layouts.app')
@section('content')
<div id="app">
   <div class="row mt-5">
      <div class="col-12 p-3">
         <img src="{{$film->poster}}" class="border rounded mx-auto d-block" alt="...">
            <h5 class="mt-5">{{$film->title}}</h5>
            <p>
               @foreach($film->genres as $genre)
               @if($loop->last)
               <span class="tag">{{$genre->title}}</span>
               @else
               <span class="tag">{{$genre->title}} |</span>
               @endif
               @endforeach
            </p>
            <p>Статус: @if($film->status==0)<i>Не опубликован</i>@else<i>Опубликован</i>@endif</p>
         </div>
      </div>


</div>

@endsection
@section('vue')
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection
