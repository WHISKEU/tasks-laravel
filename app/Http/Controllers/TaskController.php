<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function welcome()
    {
        $tasks = Task::whereDate('task_date', today())
            ->orderBy('id', 'asc')
            ->get();

        return view('welcome', compact('tasks'));
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date', 'asc')
            ->get();

        return view('tasks.index', compact('tasks'));
    }
}