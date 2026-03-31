@extends('layouts.app')

@section('title', $book->title)

@section('content')
<div class="page-header">
    <h1>{{ $book->title }}</h1>
    <a class="btn" href="{{ route('books.edit', $book->id) }}">Edit Book</a>
</div>

    <table class="info-table">
        <tr>
            <td>Edition</td>
            <td>{{ $book->edition }}</td>
        </tr>
        <tr>
            <td>Copyright</td>
            <td>{{ $book->copyright }}</td>
        </tr>
        <tr>
            <td>Language</td>
            <td>{{ $book->language }}</td>
        </tr>
        <tr>
            <td>Pages</td>
            <td>{{ $book->pages }}</td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td>
                @if($book->publisher)
                    <a href="{{ route('publishers.show', $book->publisher->id) }}">
                        {{ $book->publisher->publisher }}
                    </a>
                @else
                    N/A
                @endif
            </td>
        </tr>
        <tr>
            <td>Author</td>
            <td>
                @if($book->author)
                    <a href="{{ route('authors.show', $book->author->id) }}">
                        {{ $book->author->author }}
                    </a>
                @else
                    N/A
                @endif
            </td>
        </tr>
    </table>

    <a class="btn" href="{{ route('books.index') }}">← Back to Books</a>
@endsection