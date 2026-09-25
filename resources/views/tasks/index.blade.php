@extends('layout')

@section('title', 'Tasks')

@section('content')
    <div class="header-row">
        <h1>Tasks</h1>
        <a href="{{ route('tasks.create') }}" class="add-task-link">+ Add Task</a>
    </div>

    @if ($tasks->isEmpty())
        <div class="empty-state">No tasks yet. Click "+ Add Task" to create one.</div>
    @endif

    @foreach ($tasks as $task)
        <div class="task-card">
            <div class="task-header">
                <div>
                    <div class="task-meta">
                        <span class="task-title">{{ $task->task_name }}</span>
                        <span class="status {{ $task->status }}">{{ $task->status }}</span>
                    </div>
                    @if ($task->due_date)
                        <div class="due-date">Due: {{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}</div>
                    @endif
                    @if ($task->description)
                        <p class="task-description">{{ $task->description }}</p>
                    @endif
                </div>
                <div class="actions">
                    <a href="{{ route('tasks.edit', $task->id) }}" class="edit-link">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection