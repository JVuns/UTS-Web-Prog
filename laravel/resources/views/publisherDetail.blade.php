@extends('layouts.header')
@section('head-content')
<div style="background-color: gray; color: aliceblue"><h3>{{ $publisher->name }}</h3></div>
@endsection
@section('content')
<div style="margin: 20px 10% 20px 10%">
<figure class="figure" style="float: left; margin-right: 20px" style="width: 20px">
    <img src="{{ $publisher->image }}" class="figure-img img-fluid rounded" alt="...">
</figure>
<div style="width: 80%">
    <table>
        <tr>
            <td><b>Name</b></td><td>{{ $publisher->name }}</td>
        </tr>
        <tr>
            <td><b>Address</b></td><td>{{ $publisher->address }}</td>
        </tr>
        <tr>
            <td><b>Phone</b></td><td>{{ $publisher->phone }}</td>
        </tr>
        <tr>
            <td><b>Email</b></td><td>{{ $publisher->email }}</td>
        </tr>
    </table>
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
                <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container">
        {{ $books->links() }}
    </div>
</div>
</div>
@endsection