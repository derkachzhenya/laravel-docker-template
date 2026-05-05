@extends('layouts.base')
@section('title', 'Show')
@section('content')
    <a href="{{ route('home.index') }}">Back</a>
    <h1>Show</h1>
    <div class="row g-4 justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h3>{{ $home->title }}</h3>
                    <p>{{ $home->description }}</p>
                    <p>{{ $home->price }}</p>
                    <p>{{ $home->is_active ? 'Товар доступный' : 'Товар не доступный'}}</p>
                    <a href="{{ route('home.edit', $home->id) }}">Edit</a>
                    <form action="{{ route('home.destroy', $home->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-3">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection