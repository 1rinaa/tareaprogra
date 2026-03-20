@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <h1>Books</h1>

    <ul>
        @foreach($books as $book)
            <li>
                <a href="{{ route('books.show', $book['id']) }}">
                    {{ $book['title'] }}
                </a>
                <div class="subtitle">
                    {{ $book['copyright'] }} &nbsp;|&nbsp;
                    Authors:
                    @foreach($book['authors'] as $author)
                        <a href="{{ route('authors.show', $author['id']) }}">
                            {{ $author['author'] }}
                        </a>
                        @if(!$loop->last), @endif
                    @endforeach
                </div>
            </li>
        @endforeach
    </ul>
@endsection