<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Nananom Farms</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body>
    <div class="auth-container">
        <h2>Welcome Back!</h2>
        <p>Login to manage your account.</p>
        <div class="auth-page">
            <div class="auth-left"></div>
            <div class="auth-right">
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <p class="already_have">Don't have an account? <a href="register.php">Sign up</a></p>
            </div>

        </div>
    </div>
</body>

</html>