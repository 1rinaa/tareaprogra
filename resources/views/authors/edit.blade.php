@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
    <h1>Edit: {{ $author->author }}</h1>

    <form method="POST" action="{{ route('authors.update', $author->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="author" value="{{ old('author', $author->author) }}" required>
            @error('author') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Nationality</label>
            <input type="text" name="nationality" value="{{ old('nationality', $author->nationality) }}" required>
            @error('nationality') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Birth Year</label>
            <input type="text" name="birth_year" value="{{ old('birth_year', $author->birth_year) }}" required>
            @error('birth_year') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Fields</label>
            <input type="text" name="fields" value="{{ old('fields', $author->fields) }}" required>
            @error('fields') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Update Author</button>
            <a class="btn" href="{{ route('authors.show', $author->id) }}">Cancel</a>
        </div>
    </form>
@endsection