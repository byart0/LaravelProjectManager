<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::where('user_id', $request->user()->id)->latest()->get();
        return view('project', compact('projects'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'project_name' => ['required','string','max:100'],
        ]);

        Project::create([
            'name' => $data['project_name'],
            'user_id' => $request->user()->id,
        ]);

        return redirect()->route('project.index');
    }
}
