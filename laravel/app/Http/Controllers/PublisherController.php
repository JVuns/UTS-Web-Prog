<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(Request $req){

        $publishers = Publisher::with('books')->paginate(10);

        return view('PublisherPage', ["publishers"=>$publishers]);
    }

    public function publisherDetail(Request $req){

        $publisher = Publisher::with('books')->find($req->id);
        $books = Book::where('publisher_id', $publisher->id)->paginate(5);
        // dd($books);
        return view('publisherDetail', ["publisher"=>$publisher, "books"=>$books]);
    }
}
