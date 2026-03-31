@extends('layouts.app')

@section('title', 'Edit Publisher')

@section('content')
    <h1>Edit: {{ $publisher->publisher }}</h1>

    <form method="POST" action="{{ route('publishers.update', $publisher->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="publisher" value="{{ old('publisher', $publisher->publisher) }}" required>
            @error('publisher') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Country</label>
            <input type="text" name="country" value="{{ old('country', $publisher->country) }}" required>
            @error('country') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Founded (Year)</label>
            <input type="number" name="founded" value="{{ old('founded', $publisher->founded) }}" required>
            @error('founded') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Genre</label>
            <input type="text" name="genere" value="{{ old('genere', $publisher->genere) }}" required>
            @error('genere') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Update Publisher</button>
            <a class="btn" href="{{ route('publishers.show', $publisher->id) }}">Cancel</a>
        </div>
    </form>
@endsection