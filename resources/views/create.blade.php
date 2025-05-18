@extends('layout')

@section('content')
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection