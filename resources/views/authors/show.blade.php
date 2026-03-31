@extends('layouts.app')

@section('title', $author['author'])

@section('content')
<div class="page-header">
    <h1>{{ $author['author'] }}</h1>
    <a class="btn" href="{{ route('authors.edit', $author->id) }}">Edit Author</a>
</div>

    <table class="info-table">
        <tr>
            <td>Nationality</td>
            <td>{{ $author['nationality'] }}</td>
        </tr>
        <tr>
            <td>Birth Year</td>
            <td>{{ $author['birth_year'] }}</td>
        </tr>
        <tr>
            <td>Fields</td>
            <td>{{ $author['fields'] }}</td>
        </tr>
    </table>

    <h3 class="special-subtitle">Books by this author</h3>

    @if(count($author['books']) > 0)
        <ul>
            @foreach($author['books'] as $book)
                <li>
                    <a href="{{ route('books.show', $book['id']) }}">
                        {{ $book['title'] }}
                    </a>
                    <div class="subtitle">{{ $book['copyright'] }} &nbsp;|&nbsp; Edition: {{ $book['edition'] }}</div>
                </li>
            @endforeach
        </ul>
    @else
        <p>No books registered for this author.</p>
    @endif

    <a class="btn" href="{{ route('authors.index') }}">← Back to Authors</a>
@endsection