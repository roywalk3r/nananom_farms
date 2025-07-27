<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Nananom Farms</title>
    <link rel="stylesheet" href="assets/css/auth.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/00a449879e.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="auth-container">
        <i class="fa-solid fa-rectangle-xmark"></i>
        <img src="assets/images/logo.png" alt="Nananom Farms Logo" class="logo">
        <h1>Welcome Back!</h1>
        <p>Login to manage your account.</p>
        <div class="auth-page">
            <div class="auth-left">
                <img src="assets/images/loginPic.png" alt="login image">
            </div>
            <div class="auth-right">
                <form id="loginForm">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                    <div id="loginMessage" style="margin-top:10px;"></div>
                </form>
                <p class="already_have">Don't have an account? <a href="register.php">Sign up</a></p>
            </div>

        </div>
    </div>
</body>
<script src="assets/js/login.js"></script>
<script src="assets/js/toast.js"></script>

</html>