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
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                   <div class="form-group">
                     <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                   </div>
                   <div class="form-group">
                      <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                   </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" id="confirm_password" placeholder="Confirm your password" name="confirm_password" required>
                    </div>
                    <button type="submit">Register</button>
                </form>
                <p class="already_have">Already have an account? <a href="login.php">Log in</a></p>
            </div>

        </div>
    </div>
</body>

</html>