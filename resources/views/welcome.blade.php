@extends('layouts.app')

@section('title', 'Library')

@section('content')
    <h1>Welcome to the Computer Science Library</h1>
    <p style="color:#666; margin-bottom:25px;">This website offers information on computer science books, authors and publishers.</p>

    <ul>
        <li><a href="{{ route('books.index') }}">Books information</a></li>
        <li><a href="{{ route('authors.index') }}">Authors information</a></li>
        <li><a href="{{ route('publishers.index') }}">Publishers information</a></li>
    </ul>
@endsection