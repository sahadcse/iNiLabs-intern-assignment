@extends('layouts.layout')

@section('title', 'Edit To-Do')

@section('content')
    <div class="container">
        <h1>Change TODO</h1>

        <form action="{{ route('todos.update', $todo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group w-50">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $todo->title }}">
            </div>

            <div class="form-group mt-2 w-50">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $todo->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Update</button>
        </form>
    </div>
@endsection