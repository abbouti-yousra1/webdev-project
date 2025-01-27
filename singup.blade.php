<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link rel="stylesheet" href="{{ asset('css/singup.css') }}">
</head>
<body>
    <div class="singup-container">
        <div class="singup-form-container">
            <h2>Create an account</h2>
            <p>Already have an account ? <a href="{{ route('login') }}">Log in</a></p>
            <form id="singup-form" action="{{ route('register') }}" method="POST">
    @csrf <!-- Protection CSRF -->
    <div class="name-fields">
        <div>
            <label for="first-name">First name</label>
            <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
        </div>
        <div>
            <label for="last-name">Last name</label>
            <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
        </div>
    </div>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>
    
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>

    <label for="conf-password">Password Confirmation</label>
    <input type="password" id="conf-password" name="password_confirmation" placeholder="Confirm your password" required>

    <div class="remember-me">
        <input type="checkbox" id="remember-me" name="remember-me">
        <label for="remember-me">Remember me</label>
    </div>

    <button type="submit">Sign Up</button>
</form>

        </div>
        <div class="login-image">
            <img src="{{ asset('images/photos/img11.jpg') }}" alt="Login Illustration">
        </div>
    </div>
    <script>
        document.getElementById('singup-form').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confPassword = document.getElementById('conf-password').value;

            if (password !== confPassword) {
                event.preventDefault(); // Empêche la soumission du formulaire
                alert('Passwords do not match. Please try again.');
                document.getElementById('conf-password').value = ''; // Vide le champ de confirmation du mot de passe
            }
        });
    </script>
</body>
</html>
