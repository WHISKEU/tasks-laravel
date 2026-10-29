@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')

    <h2>All Tasks</h2>

    @if ($tasks->isEmpty())
        <p>No tasks found.</p>
    @else
        <table>
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td class="status">{{ $task->status }}</td>
                    <td>{{ $task->task_date->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </table>
    @endif

@endsection