<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register new user</title>
    <style>
        * {
            background: rgb(255, 231, 235)
        }
    </style>
</head>
<body>
    <h1>Register new user</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" minlength="8" required>
        </div>
        <button type="submit">Register</button>
    </form>
    <div>
        <a href="{{ route('login') }}">Already have an account? Login here</a>
    </div>
</body>
</html>
