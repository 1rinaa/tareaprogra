@extends('layouts.app')

@section('title', $publisher['publisher'])

@section('content')
<div class="page-header">
    <h1>{{ $publisher['publisher'] }}</h1>
    <a class="btn" href="{{ route('publishers.edit', $publisher->id) }}">Edit Publisher</a>
</div>

    <table class="info-table">
        <tr>
            <td>Country</td>
            <td>{{ $publisher['country'] }}</td>
        </tr>
        <tr>
            <td>Founded</td>
            <td>{{ $publisher['founded'] }}</td>
        </tr>
        <tr>
            <td>Genre</td>
            <td>{{ $publisher['genere'] }}</td>
        </tr>
    </table>

    <h3 class="special-subtitle">Books from this publisher</h3>

    @if(count($publisher['books']) > 0)
        <ul>
            @foreach($publisher['books'] as $book)
                <li>
                    <a href="{{ route('books.show', $book['id']) }}">
                        {{ $book['title'] }}
                    </a>
                    <div class="subtitle">{{ $book['copyright'] }} &nbsp;|&nbsp; {{ $book['edition']}} edition</div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No books registered for this publisher.</p>
    @endif

    <a class="btn" href="{{ route('publishers.index') }}">← Back to Publishers</a>
@endsection
