
@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')

        <div class="container">
            <div class="table">
                <div class="table-header">
                    <div class="header__item"><a id="name" class="filter__link" href="#">Title</a></div>
                    <div class="header__item"><a id="wins" class="filter__link filter__link--number" href="#">Price</a></div>
                    <div class="header__item"><a id="draws" class="filter__link filter__link--number" href="#">Sale Date</a></div>
                    <div class="header__item"><a id="losses" class="filter__link filter__link--number" href="#">Type</a></div>
                    <div class="header__item"><a id="total" class="filter__link filter__link--number" href="#">Description</a></div>
                    <div class="header__item"><a id="total" class="filter__link filter__link--number" href="{{route("comics.create")}}"><button>Add New Comic</button></a></div>
                </div>
                <div class="table-content">
                    @foreach ($comics as $comic)
                    <div class="table-row">
                        <div class="table-data"><a href="{{route("comics.show", $comic->id)}}">{{$comic->title}}</a></div>
                        <div class="table-data"><a href="{{route("comics.show", $comic->id)}}">{{$comic->price}}</a></div>
                        <div class="table-data"><a href="{{route("comics.show", $comic->id)}}">{{$comic->sale_date}}</a></div>
                        <div class="table-data"><a href="{{route("comics.show", $comic->id)}}">{{$comic->type}}</a></div>
                        <div class="table-data"><a href="{{route("comics.show", $comic->id)}}">{{substr($comic->description, 0,100). '...'}}</a></div>
                        <div class="table-data"><a href="{{route("comics.show", $comic->id)}}"><button>Edit</button><button>Delete</button></a></div>
                    </div>
                     @endforeach
                </div>

            </div>
        </div>

        <div class="pagination-links">
            {{$comics->links()}}
        </div>

@endsection

