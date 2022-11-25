@extends('layouts.header')
@section('head-content')
<div style="background-color: gray; color: aliceblue"><h3>{{ $category }}</h3></div>
@endsection
@section('content')
<div class="container" style="display: grid; grid-template-columns: auto auto auto auto;
grid-gap: 10px;">
    @foreach($books as $book)
    <div class="card" style="width: 18rem; float: left; margin:10px 10px 10px 10px">
        <img src="{{ $book->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }} - {{ $category }}</h5>
            by <br>
            {{ $book->author }}
            <br>
            {{-- <p class="card-text"> {{ $b->synopsis }} </p> --}}
            <a href="detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
        </div>
    </div>
    @endforeach
</div>
{{ $books->links()}}
@endsection