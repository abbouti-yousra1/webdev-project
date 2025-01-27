<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </head>
<body>
    <div class="login-container">
        <div class="login-form-container">
            <h2>Welcome back!</h2>
            <p>Don't have an account yet? <a href="{{ route('register') }}">Register</a></p>
            <form action="{{ route('login.submit') }}" method="POST" id="login-form">
                @csrf
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
    
                <div class="remember-me">
                  <input type="checkbox" id="remember-me" name="remember-me">
                  <label for="remember-me">Remember me</label>
                </div>
    
                <button type="submit">Login</button>
             </form>

        </div>
        <div class="login-image">
        <img src="{{ asset('images/photos/img11.jpg') }}" alt="Login Illustration">        </div>
        
        
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>
