<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors]);
    }

    public function show($id)
    {
        $author = Author::with('books.publisher')->findOrFail($id);
        return view('authors.show', ['author' => $author]);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author'      => 'required',
            'nationality' => 'required',
            'birth_year'  => 'required',
            'fields'      => 'required',
        ]);

        Author::create($request->all());
        return redirect()->route('authors.index');
    }

    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', ['author' => $author]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'author'      => 'required',
            'nationality' => 'required',
            'birth_year'  => 'required',
            'fields'      => 'required',
        ]);

        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect()->route('authors.show', $id);
    }
}