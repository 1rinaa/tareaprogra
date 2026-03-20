<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = config('data.authors');
        return view('authors.index', ['authors' => $authors]);
    }

    public function show($id)
    {
        $author = collect(config('data.authors'))
            ->firstWhere('id', (int)$id);

        $author['books'] = collect(config('data.books'))
            ->filter(fn($b) => in_array((int)$id, $b['author_id']))
            ->values()
            ->toArray();

        return view('authors.show', ['author' => $author]);
    }
}