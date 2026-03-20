<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = config('data.publishers');
        return view('publishers.index', ['publishers' => $publishers]);
    }

    public function show($id)
    {
        $publisher = collect(config('data.publishers'))
            ->firstWhere('id', (int)$id);

        $publisher['books'] = collect(config('data.books'))
            ->filter(fn($b) => $b['publisher_id'] === (int)$id)
            ->values()
            ->toArray();

        return view('publishers.show', ['publisher' => $publisher]);
    }
}
