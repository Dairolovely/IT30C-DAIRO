
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookHaven | Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="auth-page">

    <main class="auth-layout">

        <section class="auth-showcase">
            <a href="index.php" class="auth-brand">
                <span class="auth-brand-icon">L</span>
                <span>Lib<span>Flow.</span></span>
            </a>

            <div class="showcase-content">
                <p class="showcase-label">YOUR PERSONAL READING SPACE</p>

                <h1>Every book<br>
                    holds a <span>new world.</span>
                </h1>

                <p class="showcase-description">
                    Discover stories, borrow your next favorite book,
                    and let every page take you somewhere new.
                </p>

                <div class="showcase-books">
                    <div class="showcase-book book-a">
                        <span>01</span>
                        <div class="mini-book-decoration">❧</div>
                        <strong>THE<br>CLASSICS</strong>
                        <small>TIMELESS STORIES</small>
                    </div>

                    <div class="showcase-book book-b">
                        <span>02</span>
                        <div class="mini-book-decoration">✳</div>
                        <strong>NEW<br>DISCOVERIES</strong>
                        <small>YOUR NEXT CHAPTER</small>
                    </div>

                    <div class="showcase-book book-c">
                        <span>03</span>
                        <div class="mini-book-decoration">✧</div>
                        <strong>GROW<br>AND LEARN</strong>
                        <small>KNOWLEDGE AWAITS</small>
                    </div>
                </div>

                <div class="showcase-quote">
                   
                </div>
            </div>

            <div class="showcase-footer">
                
            </div>
        </section>

    
        <section class="auth-panel">

            <div class="mobile-brand">
                <span class="auth-brand-icon">L</span>
                <span>Lib<span>Flow.</span></span>
            </div>

            <div class="auth-card">

                
                <form id="loginForm" class="auth-form active"
                      action="login.php" method="POST">

                    <div class="form-icon">⌑</div>

                   
                    <h2>Welcome back<span class="title-dot">.</span></h2>

                

                    <div class="input-group">
                        <label for="login-username">
                            Username or Email
                        </label>
                        <input
                            type="text"
                            id="login-username"
                            name="username"
                            required
                            autocomplete="username"
                            placeholder="Enter your username or email">
                    </div>

                    <div class="input-group">
                        <label for="login-password">Password</label>
                        <input
                            type="password"
                            id="login-password"
                            name="password"
                            required
                            autocomplete="current-password"
                            placeholder="Enter your password">
                    </div>

                    <button type="submit" class="submit-btn">
                        Sign In to LibFlow <span>→</span>
                    </button>

                    <p class="switch-text">
                        New to LibFlow?
                        <a href="#register"
                           onclick="showForm('register'); return false;">
                            Create an account
                        </a>
                    </p>
                </form>

               
                <form id="registerForm" class="auth-form"
                      action="register.php" method="POST">

                    <div class="form-icon">✳</div>

                    <p class="form-eyebrow">JOIN OUR READING COMMUNITY</p>
                    <h2>Create account<span class="title-dot">.</span></h2>

                    <p class="form-description">
                        Create your account and start your reading journey.
                    </p>

                    <div class="input-group">
                        <label for="reg-username">Username</label>
                        <input
                            type="text"
                            id="reg-username"
                            name="username"
                            required
                            autocomplete="username"
                            placeholder="Choose a username">
                    </div>

                    <div class="input-group">
                        <label for="reg-email">Email Address</label>
                        <input
                            type="email"
                            id="reg-email"
                            name="email"
                            required
                            autocomplete="email"
                            placeholder="Enter your email address">
                    </div>

                    <div class="input-group">
                        <label for="reg-password">Password</label>
                        <input
                            type="password"
                            id="reg-password"
                            name="password"
                            required
                            autocomplete="new-password"
                            placeholder="Create a password">
                    </div>

                    <button type="submit"
                            class="submit-btn register-btn">
                        Create My Account <span>→</span>
                    </button>

                    <p class="switch-text">
                        Already a member?
                        <a href="#login"
                           onclick="showForm('login'); return false;">
                            Sign in here
                        </a>
                    </p>
                </form>

            </div>

            <footer class="auth-footer">
            
               
            </footer>

        </section>
    </main>

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
