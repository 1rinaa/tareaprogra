@extends('layouts.app')

@section('title', 'Authors')

@section('content')
    <h1>Authors</h1>

    <ul>
        @foreach($authors as $author)
            <li>
                <a href="{{ route('authors.show', $author['id']) }}">
                    {{ $author['author'] }}
                </a>
                <div class="subtitle">
                    {{ $author['nationality'] }} &nbsp;|&nbsp; Born: {{ $author['birth_year'] }}
                </div>
            </li>
        @endforeach
    </ul>
@endsection