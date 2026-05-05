@extends('layouts.base')
@section('title', 'Main page')
@section('content')
<a href="{{ route('home.create') }}">Create</a>
    <h1>Main page</h1>

    <div class='row g-4 justify-content-center'>
        @foreach($homes as $home)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h3><a href="{{ route('home.show', $home->id) }}">{{ $home->title }}</a></h3>
                        <p>{{$home->description }}</p>
                        <p>{{ $home->price }}</p>
                        <p>{{ $home->is_active ? 'Есть в продаже' : 'Нет в продаже' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection