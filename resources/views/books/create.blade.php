@extends('layouts.app')

@section('title', 'Add Book')

@section('content')
    <h1>Add Book</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Edition</label>
            <input type="text" name="edition" value="{{ old('edition') }}" required>
            @error('edition') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Copyright (Year)</label>
            <input type="number" name="copyright" value="{{ old('copyright') }}" required>
            @error('copyright') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Language</label>
            <input type="text" name="language" value="{{ old('language') }}" required>
            @error('language') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Pages</label>
            <input type="number" name="pages" value="{{ old('pages') }}" required>
            @error('pages') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Author</label>
            <select name="author_id" required>
                <option value="">-- Select Author --</option>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                        {{ $author->author }}
                    </option>
                @endforeach
            </select>
            @error('author_id') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Publisher</label>
            <select name="publisher_id" required>
                <option value="">-- Select Publisher --</option>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ old('publisher_id') == $publisher->id ? 'selected' : '' }}>
                        {{ $publisher->publisher }}
                    </option>
                @endforeach
            </select>
            @error('publisher_id') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Save Book</button>
            <a class="btn" href="{{ route('books.index') }}">Cancel</a>
        </div>
    </form>
@endsection