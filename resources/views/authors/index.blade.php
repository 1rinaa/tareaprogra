@extends('layouts.app')

@section('title', 'Authors')

@section('content')
<div class="page-header">
    <h1>Authors</h1>
    <a class="btn" href="{{ route('authors.create') }}">+ Add Author</a>
</div>

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