@extends('layouts.header')
@section('head-content')
<div style="background-color: gray; color: aliceblue"><h3>Book List</h3></div>
@endsection
@section('content')
{{-- <div class="container"> --}}
<div class="container" style="display: grid; grid-template-columns: auto auto auto auto;
grid-gap: 10px;">
    @foreach($books as $book)
    <div class="card" style="width: 18rem; margin:10px 10px 10px 10px">
        <img src="{{ $book->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            by <br>
            {{ $book->author }}
            <br>
            {{-- <p class="card-text"> {{ $b->synopsis }} </p> --}}
            <a href="detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
        </div>
    </div>
    @endforeach
</div>
<div class="container">
    {{ $books->links() }}
</div>
{{-- </div> --}}
@endsection