@extends('layouts.base')
@section('title', 'Create')
@section('content')
    <h1>Create new post</h1>
    <form action="{{ route('home.store') }}" method="POST">
        @csrf
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <input type="text" name="title" placeholder="Title" class="form-control"><br>
                <textarea type="text" name="description" placeholder="Description" class="form-control"></textarea><br>
                <input type="text" name="price" placeholder="Price" class="form-control"><br>
                <input type="hidden" name="is_active" value="0">
                <input type="checkbox" name="is_active" value="1" class="form-check-input" ><br>
                <button type="submit" class="btn btn-secondary mt-2">Create</button>
            </div>
        </div>
    </form>
@endsection