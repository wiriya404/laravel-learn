@extends('layout')

@section('content')
    <h1>All Post </h1>
    <a href="{{ route('create') }}" class="btn btn-primary mb-3"> + Create New Post</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
@endsection
