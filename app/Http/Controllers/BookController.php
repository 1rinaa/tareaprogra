<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'publisher'])->get();
        return view('books.index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::with(['author', 'publisher'])->findOrFail($id);
        return view('books.show', ['book' => $book]);
    }

    public function create()
    {
        $authors    = Author::all();
        $publishers = Publisher::all();
        return view('books.create', compact('authors', 'publishers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required',
            'edition'      => 'required',
            'copyright'    => 'required|integer',
            'language'     => 'required',
            'pages'        => 'required|integer',
            'author_id'    => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book       = Book::findOrFail($id);
        $authors    = Author::all();
        $publishers = Publisher::all();
        return view('books.edit', compact('book', 'authors', 'publishers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'        => 'required',
            'edition'      => 'required',
            'copyright'    => 'required|integer',
            'language'     => 'required',
            'pages'        => 'required|integer',
            'author_id'    => 'required|exists:authors,id',
            'publisher_id' => 'required|exists:publishers,id',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('books.show', $id);
    }
}