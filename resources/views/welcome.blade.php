@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <h2>Today’s Tasks</h2>

    @forelse ($tasks as $task)
        <ul class="task-list">
            <li>
                {{ $task->title }}
                -
                <span class="status">
                    {{ $task->status }}
                </span>
            </li>
        </ul>
    @empty
        <p>No tasks scheduled for today.</p>
    @endforelse

@endsection