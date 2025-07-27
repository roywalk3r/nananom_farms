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
        <h1>Create your account today!</h1>
        <p> We are excited to have you on board!</p>
        <div class="auth-page">
            <div class="auth-left">
                <img src="assets/images/registerLogo.png" alt="login image">
            </div>
            <div class="auth-right">
                <form id="registerForm">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Enter your username" required>
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
                        <input type="password" id="confirm_password" placeholder="Confirm your password"
                            name="confirm_password" required>
                    </div>
                    <button type="submit">Register</button>
                    <div id="registerMessage" style="margin-top:10px;"></div>
                </form>
                <p class="already_have">Already have an account? <a href="login.php">Log in</a></p>
            </div>

        </div>
    </div>
</body>
<script src="assets/js/register.js"></script>
<script src="assets/js/toast.js"></script>

</html>