<?php
// session.php

// Secure session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
session_start();

/**
 * Check if user is logged in
 *
 * @return bool
 */
function is_logged_in() {
    return isset($_SESSION['user_id']);
}

/**
 * Require login or redirect
 *
 * @param string $redirectTo
 */
function require_login($redirectTo = 'login.php') {
    if (!is_logged_in()) {
        header("Location: $redirectTo");
        exit;
    }
}

/**
 * Log in a user
 *
 * @param int|string $userId
 */
function login($userId) {
    session_regenerate_id(true); // Prevent session fixation
    $_SESSION['user_id'] = $userId;
}

/**
 * Log out current user
 */
function logout() {
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
}
