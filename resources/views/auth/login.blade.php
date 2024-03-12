<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Log In</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: burlywood;
        }

        .login-container {
            width: 300px;
            padding: 100px;
            border: 1px solid #000;
            border-radius: 8px;
            /* background-color: black; */
        }

        .login-container form {
            text-align: center;
        }

        .login-container form input,
        .login-container form button,
        .login-container a {
            margin: 10px 0;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<div class="login-container">
<form action="{{ url('/login') }}" method="post">
    @csrf
    <h1>User Login</h1>
    <input type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
    <br>
    <span style="color: red">@error('email'){{ $message }}@enderror</span>
    <br>
    <input type="password" name="password" placeholder="Enter password">
    <br>
    <span style="color: red">@error('password'){{ $message }}@enderror</span>
    <br>
    <button type="submit">Sign In</button>
    </form>
<a href="{{ url('/register') }}">Don't have an account? Sign Up</a>
</div>
