<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks for {{ $project->name }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .center-box {
            background-color: white;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: left;
            max-width: 400px;
            width: 90%;
        }

        .center-box input[type="text"] {
            display: block;
            margin: 15px 0;
            padding: 8px;
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .center-box button {
            display: block;
            margin: 0;
            padding: 8px 15px;
            width: 35%;
            text-align: left;
            background-color: #4285F4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .center-box button:hover {
            background-color: #3367D6;
        }

        .center-box a {
            display: block;
            margin: 10px 0;
            padding: 8px;
            width: 50%;
            background-color: #FFFFFF;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

        .center-box a:hover {
            text-decoration: underline;
        }

        ul {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="center-box">
        <h1>Tasks for Project: {{ $project->name }}</h1>

        <!-- Add Task Form -->
        <form method="POST" action="{{ route('task.store', $project->id) }}">
            @csrf
            <input type="text" name="task_name" placeholder="New Task" required>
            <button type="submit">Add Task</button>
        </form>

        <!-- Task List -->
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->name }}</li>
            @endforeach
        </ul>

        // filepath: resources/views/task.blade.php
        <a href="{{ route('project.index') }}"> 🠔 Back to Projects </a>  
    </div>
</body>
</html>
