<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Project $project, Request $request)
    {
        // Yetki: proje bu kullanıcıya mı ait?
        abort_unless($project->user_id === $request->user()->id, 403);

        $tasks = $project->tasks()->latest()->get();
        return view('task', compact('project','tasks'));
    }

    public function store(Project $project, Request $request)
    {
        abort_unless($project->user_id === $request->user()->id, 403);

        $data = $request->validate([
            'task_name' => ['required','string','max:100'],
        ]);

        Task::create([
            'name' => $data['task_name'],
            'project_id' => $project->id,
        ]);

        return redirect()->route('task.index', $project);
    }
}
