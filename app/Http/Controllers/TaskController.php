<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{


    public function index()
    {
        #viewing tasks
        $tasks = Task::paginate(10);

        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        #fetching admins and users to create page
        $admins = User::where('is_admin', true)->get(['id', 'name']);
        $users = User::where('is_admin', false)->get(['id', 'name']);

        return view('tasks.create', compact('admins', 'users'));
    }

    public function store(Request $request)
    {
        // Validate data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'assigned_by_id' => 'required',
            'assigned_to_id' => 'required',
        ]);

        // Create new task
        Task::create($validatedData);

        return redirect()->route('tasks.index')->with('success', 'Task created successfully');
    }
}
