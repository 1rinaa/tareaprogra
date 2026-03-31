@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <h1>Edit: {{ $book->title }}</h1>

    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title', $book->title) }}" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Edition</label>
            <input type="text" name="edition" value="{{ old('edition', $book->edition) }}" required>
            @error('edition') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Copyright (Year)</label>
            <input type="number" name="copyright" value="{{ old('copyright', $book->copyright) }}" required>
            @error('copyright') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Language</label>
            <input type="text" name="language" value="{{ old('language', $book->language) }}" required>
            @error('language') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Pages</label>
            <input type="number" name="pages" value="{{ old('pages', $book->pages) }}" required>
            @error('pages') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Author</label>
            <select name="author_id" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->author }}
                    </option>
                @endforeach
            </select>
            @error('author_id') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Publisher</label>
            <select name="publisher_id" required>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ $book->publisher_id == $publisher->id ? 'selected' : '' }}>
                        {{ $publisher->publisher }}
                    </option>
                @endforeach
            </select>
            @error('publisher_id') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Update Book</button>
            <a class="btn" href="{{ route('books.show', $book->id) }}">Cancel</a>
        </div>
    </form>
@endsection