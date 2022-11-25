@extends('layouts.header')
@section('head-content')
<div style="background-color: gray; color: aliceblue"><h3>Book Detail</h3></div>
@endsection
@section('content')
<div style="margin: 20px 10% 20px 10%">
<figure class="figure" style="float: left; margin-right: 20px" style="width: 20px">
    <img src="{{ $book->image }}" class="figure-img img-fluid rounded" alt="...">
</figure>
<div style="width: 80%">
    <table>
        <tr>
            <td><b>Title</b></td><td>{{ $book->title }}</td>
        </tr>
        <tr>
            <td><b>Author</b></td><td>{{ $book->author }}</td>
        </tr>
        <tr>
            <td><b>Publisher</b></td><td>{{ $book->publisher->name }}</td>
        </tr>
        <tr>
            <td><b>Year</b></td><td>{{ $book->year }}</td>
        </tr>
        <tr>
            <td><b>synopsis:</b></td>
        </tr>
    </table>
    {{ $book->synopsis }}
</div>
</div>
@endsection