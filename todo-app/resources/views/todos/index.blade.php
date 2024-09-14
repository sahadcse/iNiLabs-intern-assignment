@extends('layouts.layout')

@section('title', 'To-Do Home')

@section('content')
<div class="d-flex justify-content-between">
    <h1>To-Do List</h1>
    <a href="{{ route('todos.create') }}" class="btn btn-secondary h-75">Create New To-Do</a>
</div>

@if(session('success'))
<div>{{ session('success') }}</div>
@endif

<ul class="row mt-5 w-100">
    @forelse ($todos as $todo)
    <li class="col-md-4 mb-4 list-unstyled">
        <div class="card border-primary h-100">
            <div class="card-body">
                <h5 class="card-title">{{ $todo->title }} | <small style="font-size: 12px">{{ $todo->created_at->format('M d, Y') }}</small></h5>
                <p class="card-text">{{ $todo->description }}</p>
                <div class="d-flex flex-column flex-md-row justify-content-around">
                    <div class="col-md-5 mb-2 mb-md-0">
                        <a href="{{ route('todos.edit', $todo->id) }}" class="btn btn-outline-primary w-100">Edit</a>
                    </div>

                    <div class="col-md-5">
                        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </li>
    @empty
    <li class="col-12 border w-25 text-center m-auto list-unstyled border-danger fs-5">No To-Do's are found.</li>
    @endforelse
</ul>


@endsection