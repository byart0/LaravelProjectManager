<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
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
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        .center-box a {
            display: block;
            margin: 15px ;
            padding: 5px;
            width: 87%;
            background-color: #000000;
            border: 1px solid black;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .center-box h1 {
            background-color: white;
            color: black;
        }

        .center-box input[type="submit"] {
            display: block;
            margin: 15px;
            padding: 8px 15px;
            width: 90%;
            background-color: #4285F4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .center-box input[type="submit"]:hover {
            background-color: #3367D6;
        }

        .center-box a:hover {
            background-color: #FFFFFF;
            color: black;
        }

        .center-box input {
            margin-bottom: 10px;
            margin: 15px;
            display: block;
            width: 87%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .center-box p {
            margin: 15px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="center-box">
        <h1>Register</h1>
        
        <!-- Laravel Form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" required>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <input type="submit" value="Register">
        </form>
        
        <!-- Error Message -->
        @if ($errors->any())
            <div style="color: red; font-size: 14px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p>Do you already have an account?</p>
        <a href="{{ route('login') }}">Login</a>
    </div>
</body>
</html>
