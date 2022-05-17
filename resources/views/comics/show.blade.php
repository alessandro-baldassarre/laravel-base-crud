
@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')

        <div class="container-comic">

                        <div class="comic-img"><img src={{$comic->thumb}} alt="cover of {{$comic->title}}"></div>
                        <div class="comic-title"><h1>{{$comic->title}}</h1></div>
                        <div class="comic-description">{{$comic->description}}</div>
                        <div class="comic-price"><h3>Price: {{$comic->price}}</h3></div>
                        <div class="comic-sale-date"><h3>On Sale Date: {{$comic->sale_date}}</h3></div>
                        <div class="comic-type"><h3>Type: {{$comic->type}}</h3></div>
                        <div class="comic-button"><a href="{{route("comics.index")}}"><button>Back to Comics</button></a></div>


        </div>

@endsection

