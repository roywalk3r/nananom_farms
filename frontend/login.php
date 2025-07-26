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
        <img src="assets/images/logo.png" alt="Nananom Farms Logo" class="logo">
        <h2>Welcome Back!</h2>
        <p>Login to manage your account.</p>
        <div class="auth-page">
            <div class="auth-left">
                <img src="assets/images/loginPic.png" alt="login image">
            </div>
            <div class="auth-right">
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
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