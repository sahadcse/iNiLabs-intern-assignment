@extends('layouts.layout')

@section('title', 'Create To-Do')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Todo</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('todos.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection