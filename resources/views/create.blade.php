<!-- resources/views/items/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Add New Item</h2>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        &nbsp;&nbsp;&nbsp;
        <button type="button" class="btn btn-light" OnClick="history.go(-1);">Cancel</button>
    </form>
</div>
@endsection
