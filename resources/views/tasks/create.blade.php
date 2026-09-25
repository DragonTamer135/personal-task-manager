@extends('layout')

@section('title', 'Add Task')

@section('content')
    <h1>Add Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label for="task_name">Task Name</label>
        <input type="text" id="task_name" name="task_name" value="{{ old('task_name') }}">
        @error('task_name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4">{{ old('description') }}</textarea>
        @error('description')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="due_date">Due Date</label>
        <input type="date" id="due_date" name="due_date" value="{{ old('due_date') }}">
        @error('due_date')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Save Task</button>
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>
@endsection