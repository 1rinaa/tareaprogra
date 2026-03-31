@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="page-header">
    <h1>Books</h1>
    <a class="btn" href="{{ route('books.create') }}">+ Add Book</a>
</div>

    <ul>
        @foreach($books as $book)
            <li>
                <a href="{{ route('books.show', $book->id) }}">
                    {{ $book->title }}
                </a>
                <div class="subtitle">
                    {{ $book->copyright }} &nbsp;|&nbsp;
                    Author:
                    @if($book->author)
                        <a href="{{ route('authors.show', $book->author->id) }}">
                            {{ $book->author->author }}
                        </a>
                    @else
                        N/A
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endsection