<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Home Page</title>
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
            margin: 10px ;
            padding: 5px;
            background-color: #FFFFFF;
            border: 1px solid black;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

        .center-box #foo {
            background-color: black;
            color: white;
            border: 1px solid black;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .center-box #foo:hover {
            background-color: #808080;
            color: white;
        }

        .center-box a:hover {
            background-color: #808080;
            color: white;
        }

        .center-box p {
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="center-box">
        <h1>Let's Manage Your Projects!</h1>
        <p>Do you already have an account?</p>

        <!-- Laravel route() kullanarak yönlendirme -->
        <a href="{{ route('login') }}">Login</a>

        <div class="divider">
            <span>or</span>
        </div>

        <!-- Laravel route() kullanarak yönlendirme -->
        <a href="{{ route('register') }}" id="foo">Register</a>
        <p>If you don't have an account, please Register!</p>
    </div>
</body>
</html>
