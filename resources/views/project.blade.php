<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Projects</title>
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
            margin: 5px 0;
            padding: 8px;
            width: 50%;
            background-color: #FFFFFF;
            border: 1px solid black;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

        .center-box a:hover {
            background-color: #f2f0f0;
        }

        ul {
            list-style-type: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="center-box">
        <h1>Your Projects</h1>

        <!-- Laravel Form -->
        <form method="POST" action="{{ route('project.store') }}">
            @csrf
            <button type="submit">+ Create Project</button>
            <input type="text" name="project_name" placeholder="New Project" required>
        </form>

        <ul>
            <!-- Loop through projects -->
            @foreach($projects as $project)
                <li>
                    <!-- Route to task page for specific project -->
                    <a href="{{ route('task.index', $project->id) }}">{{ $project->name }}</a>
                    <div style="font-size: 12px; color: gray; margin-left:5px;">
                        Click to add a task
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
