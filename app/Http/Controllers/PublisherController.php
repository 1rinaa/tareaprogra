<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', ['publishers' => $publishers]);
    }

    public function show($id)
    {
        $publisher = Publisher::with('books.author')->findOrFail($id);
        return view('publishers.show', ['publisher' => $publisher]);
    }

    public function create()
    {
        return view('publishers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'publisher' => 'required',
            'country'   => 'required',
            'founded'   => 'required|integer',
            'genere'    => 'required',
        ]);

        Publisher::create($request->all());
        return redirect()->route('publishers.index');
    }

    public function edit($id)
    {
        $publisher = Publisher::findOrFail($id);
        return view('publishers.edit', ['publisher' => $publisher]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'publisher' => 'required',
            'country'   => 'required',
            'founded'   => 'required|integer',
            'genere'    => 'required',
        ]);

        $publisher = Publisher::findOrFail($id);
        $publisher->update($request->all());
        return redirect()->route('publishers.show', $id);
    }
}