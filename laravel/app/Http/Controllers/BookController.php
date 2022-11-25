<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(20);
        return view('homePage',["books"=>$books]);
    }

    public function detailBook(Request $req){
        // dd($req->id);
        $book = Book::find($req->id);
        return view('bookDetail',["book"=>$book]);
    }

    public function findCategory(Request $req){
        // dd($req->category);
        // $books = Book::where('name', $req->category)->get();
        $books = Book::join('book_categories', 'book_categories.book_id', '=', 'books.id')
        ->join('categories', 'categories.id', '=', 'book_categories.category_id')->where('name', $req->category)
        ->paginate(20);
        // dd($books);
        return view('categoryPage', ["books"=>$books, "category"=>$req->category]);
    }
}
