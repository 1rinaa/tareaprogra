@extends('layouts.app')

@section('title', 'Add Author')

@section('content')
    <h1>Add Author</h1>

    <form method="POST" action="{{ route('authors.store') }}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="author" value="{{ old('author') }}" required>
            @error('author') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Nationality</label>
            <input type="text" name="nationality" value="{{ old('nationality') }}" required>
            @error('nationality') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Birth Year</label>
            <input type="text" name="birth_year" value="{{ old('birth_year') }}" required>
            @error('birth_year') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Fields</label>
            <input type="text" name="fields" value="{{ old('fields') }}" required>
            @error('fields') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Save Author</button>
            <a class="btn" href="{{ route('authors.index') }}">Cancel</a>
        </div>
    </form>
@endsection