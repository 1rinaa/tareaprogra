@extends('layouts.app')

@section('title', 'Publishers')

@section('content')
<div class="page-header">
    <h1>Publishers</h1>
    <a class="btn" href="{{ route('publishers.create') }}">+ Add Publisher</a>
</div>

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