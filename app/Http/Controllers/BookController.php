<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks()
    {
        $books = Book::all();

       
        foreach ($books as $book) {
            if (!isset($book->img)) {
               
                $book->img = 'default.jpg'; 
            }
        }
    
        
        return view('books', ['books' => $books]);
    }


    public function getBookById(Book $book)
    {
        return view('book', [
            'book' => $book
        ]);
    }
}
