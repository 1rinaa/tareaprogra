@extends('layouts.app')

@section('title', $book['title'])

@section('content')
    <h1>{{ $book['title'] }}</h1>

    <table class="info-table">
        <tr>
            <td>Edition</td>
            <td>{{ $book['edition'] }}</td>
        </tr>
        <tr>
            <td>Copyright</td>
            <td>{{ $book['copyright'] }}</td>
        </tr>
        <tr>
            <td>Language</td>
            <td>{{ $book['language'] }}</td>
        </tr>
        <tr>
            <td>Pages</td>
            <td>{{ $book['pages'] }}</td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td>
                <a href="{{ route('publishers.show', $book['publisher']['id']) }}">
                    {{ $book['publisher']['publisher'] }}
                </a>
            </td>
        </tr>
        <tr>
            <td>Authors</td>
            <td>
                @foreach($book['authors'] as $author)
                    <a href="{{ route('authors.show', $author['id']) }}">
                        {{ $author['author'] }}
                    </a>
                    @if(!$loop->last), @endif
                @endforeach
            </td>
        </tr>
    </table>

    <a class="btn" href="{{ route('books.index') }}">← Back to Books</a>
@endsection