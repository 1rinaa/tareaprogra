<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //Metodo para listar todos los libros
    public function index()
    {
        $books = collect(config('data.books'))
            ->map(function($book) {
                $book['publisher'] = collect(config('data.publishers'))
                    ->firstWhere('id', $book['publisher_id']);

                $book['authors'] = collect(config('data.authors'))
                    ->filter(fn($a) => in_array($a['id'], $book['author_id']))
                    ->values()
                    ->toArray();

                return $book;
            })->toArray();

        return view('books.index', ['books' => $books]);
    }

    //Metodo para mostrar un libro en especifico
    public function show($id)
    {
        $book = collect(config('data.books'))
            ->firstWhere('id', (int)$id);

        $book['publisher'] = collect(config('data.publishers'))
            ->firstWhere('id', $book['publisher_id']);

        $book['authors'] = collect(config('data.authors'))
            ->filter(fn($a) => in_array($a['id'], $book['author_id']))
            ->values()
            ->toArray();

        return view('books.show', ['book' => $book]);
    }
}
