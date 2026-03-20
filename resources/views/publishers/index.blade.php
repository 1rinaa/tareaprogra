@extends('layouts.app')

@section('title', 'Publishers')

@section('content')
    <h1>Publishers</h1>

    <ul>
        @foreach($publishers as $publisher)
            <li>
                <a href="{{ route('publishers.show', $publisher['id']) }}">
                    {{ $publisher['publisher'] }}
                </a>
                <div class="subtitle">
                    {{ $publisher['country'] }} &nbsp;|&nbsp; Founded: {{ $publisher['founded'] }}
                </div>
            </li>
        @endforeach
    </ul>
@endsection