@extends('layouts.app')

@section('title', 'Add Publisher')

@section('content')
    <h1>Add Publisher</h1>

    <form method="POST" action="{{ route('publishers.store') }}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="publisher" value="{{ old('publisher') }}" required>
            @error('publisher') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Country</label>
            <input type="text" name="country" value="{{ old('country') }}" required>
            @error('country') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Founded (Year)</label>
            <input type="number" name="founded" value="{{ old('founded') }}" required>
            @error('founded') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label>Genre</label>
            <input type="text" name="genere" value="{{ old('genere') }}" required>
            @error('genere') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="form-actions">
            <button type="submit" class="btn">Save Publisher</button>
            <a class="btn" href="{{ route('publishers.index') }}">Cancel</a>
        </div>
    </form>
@endsection