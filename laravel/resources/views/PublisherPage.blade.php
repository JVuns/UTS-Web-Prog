@extends('layouts.header')
@section('head-content')
<div style="background-color: gray; color: aliceblue"><h3>Publishers</h3></div>
@endsection
@section('content')
{{-- <div class="container"> --}}
<div class="container" style="display: grid; grid-template-columns: auto auto auto auto;
grid-gap: 10px;">
    @foreach($publishers as $publisher)
        <div class="card" style="width: 18rem; margin:10px 10px 10px 10px">
            <img src="{{ $publisher->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $publisher->name }}</h5>
                by <br>
                {{ $publisher->name }}
                <br>
                {{-- <p class="card-text"> {{ $b->synopsis }} </p> --}}
                <a href="publisherDetail/{{ $publisher->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        <div>
            <ul>
            @foreach ($publisher->books as $book)
                <div>
                    <li>{{ $book->title }} -
                    {{ $book->author }}     
                    </li>   
                </div>
            @endforeach
            <ul>
        </div>
    @endforeach
</div>
<div class="container">
    {{ $publishers->links() }}
</div>
{{-- </div> --}}
@endsection