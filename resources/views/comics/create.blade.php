@extends('layouts.main')

@section('title', 'New Comic')

@section('main-content')


    <h1>
        New Comic
    </h1>

                <form action="{{ route('comics.store') }}" method="post">
                    @csrf

                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" required>


                        <label for="description">Description</label>
                        <input type="text" name="description" id="description">


                        <label for="thumb">Image Url</label>
                        <input type="text" name="thumb" id="thumb">


                        <label for="price">Price</label>
                        <input type="float" name="price" id="price">


                        <label for="sale_date">Sale Date</label>
                        <input type="date" name="sale_date" id="sale_date">

                        <label for="type">Type</label>
                        <input type="text" name="type" id="type">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

@endsection
