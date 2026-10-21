<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="auth-container">
        <!-- Login Form -->
        <form id="loginForm" class="auth-form active" action="login.php" method="POST">
            <h2>Welcome Back</h2>
            <p class="subtitle">Please sign in to continue</p>
            
            <div class="input-group">
                <label for="login-username">Username or Email</label>
                <input type="text" id="login-username" name="username" required placeholder="Enter your username">
            </div>

            <div class="input-group">
                <label for="login-password">Password</label>
                <input type="password" id="login-password" name="password" required placeholder="Enter password">
            </div>

            <button type="submit" class="submit-btn">Sign In</button>

            <p class="switch-text">
                Don't have an account? <a href="#" onclick="showForm('register'); return false;">Register here</a>
            </p>
        </form>

        <!-- Register Form -->
        <form id="registerForm" class="auth-form" action="register.php" method="POST">
            <h2>Create Account</h2>
            <p class="subtitle">Fill in the details below to get started</p>

            <div class="input-group">
                <label for="reg-username">Username</label>
                <input type="text" id="reg-username" name="username" required placeholder="Choose a username">
            </div>

            <div class="input-group">
                <label for="reg-email">Email Address</label>
                <input type="email" id="reg-email" name="email" required placeholder="Enter your email">
            </div>

            <div class="input-group">
                <label for="reg-password">Password</label>
                <input type="password" id="reg-password" name="password" required placeholder="Create a password">
            </div>

            <button type="submit" class="submit-btn register-btn">Sign Up</button>

            <p class="switch-text">
                Already have an account? <a href="#" onclick="showForm('login'); return false;">Login here</a>
            </p>
        </form>
    </div>

    <script>
        function showForm(formType) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');

            if (formType === 'register') {
                loginForm.classList.remove('active');
                registerForm.classList.add('active');
            } else {
                registerForm.classList.remove('active');
                loginForm.classList.add('active');
            }
        }
    </script>

</body>
</html>