<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: burlywood;
        }

        .registration-container {
            width: 300px;
            padding: 100px;
            border: 1px solid #000;
            border-radius: 8px;
        }

        .registration-container form {
            text-align: center;
        }

        .registration-container form input,
        .registration-container form button,
        .registration-container a {
            margin: 10px 0;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

    <div class="registration-container">
        <form action="{{ url('/register') }}" method="post">
            @csrf
            <h1>User Registration</h1>
            <input type="text" name="name" placeholder="Enter username" value="{{ old('name') }}">
            <br>
            <span style="color: red">@error('name'){{ $message }}@enderror</span>
            <br>
            <input type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
            <br>
            <span style="color: red">@error('email'){{ $message }}@enderror</span>
            <br>
            <input type="password" name="password" placeholder="Enter password">
            <br>
            <span style="color: red">@error('password'){{ $message }}@enderror</span>
            <br>
            <button type="submit">Sign Up</button>
        </form>

        <a href="{{ url('/login') }}">Already have an account? Sign In</a>
    </div>

</body>
</html>
