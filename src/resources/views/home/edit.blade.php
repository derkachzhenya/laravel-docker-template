@extends('layouts.base')
@section('title', 'Edit')
@section('content')
    <a href="{{ route('home.index') }}">Back</a>
    <h1>Edit</h1>
    <form action="{{ route('home.update', $home->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <input type="text" name="title" value="{{ old('title', $home->title) }}" class="form-control"><br>
                <textarea type="text" name="description"
                    class="form-control">{{ old('description', $home->description)}}</textarea><br>
                <input type="text" name="price" value="{{ old('price', $home->price) }}" class="form-control"><br>
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $home->is_active) ? 'checked' : '' }}
                    class="form-check-input"><br>
                <button type="submit" class="btn btn-secondary">Edit</button>
            </div>
        </div>
    </form>
@endsection