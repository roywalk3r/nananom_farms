<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if ($email) {
        // Example: Save to file or DB (you can change this)
        file_put_contents('subscribers.txt', $email . PHP_EOL, FILE_APPEND);
        header("Location: thankyou.php");
        exit;
    } else {
        $error = "Please enter a valid email address.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscribe to our Newsletter</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #fff9f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .newsletter-wrapper {
            animation: fadeInScale 1s ease forwards;
            opacity: 0;
            transform: scale(0.95);
        }

        @keyframes fadeInScale {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .newsletter-card {
            background: #fff;
            border: 2px solid #efd6a7;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        .newsletter-card h2 {
            color: #3e342d;
            margin-bottom: 0.5rem;
        }

        .newsletter-card p {
            color: #6b5e52;
            margin-bottom: 1.5rem;
        }

        .newsletter-form input[type="email"] {
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 0.5rem;
            width: 100%;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .newsletter-form button {
            padding: 0.75rem 2rem;
            border: none;
            background: #efd6a7;
            color: #3e342d;
            font-weight: bold;
            font-size: 1rem;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .newsletter-form button:hover {
            background: #e5c88f;
        }

        .error {
            color: red;
            margin-bottom: 1rem;
        }

    </style>
</head>

<body>
<div class="newsletter-wrapper">
    <div class="newsletter-card">
        <h2>Stay Updated!</h2>
        <p>Subscribe to get the latest updates, tips, and offers.</p>

        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" class="newsletter-form">
            <input type="email" name="email" placeholder="Enter your email..." required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
</div>
</body>
</html>
