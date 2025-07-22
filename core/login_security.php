<?php
require 'session.php';
include 'database.php';
session_start();
if($_SERVER['REQUEST_METHOD'] =='POST')
{
    $email = $_POST['email'] ;
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT  users.id, users.name, usrs.password, roles.name AS role_name FROM users
                                    
                            JOIN roles ON users.role_id = roles.id 
                            WHERE users.email = ? ");
                            $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    if($user && password_verify($password, $user['password']))
    {
        if ($user['role_name'] == 'admin' || $user['role_name'] == 'support') 
            {
            $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['role_name'] = $user['role_name'];

         // Record login time
        $login_time = date('Y-m-d H:i:s');
        $stmt = $conn->prepare("INSERT INTO sessions (user_id, login_time) VALUES (?, ?)");
        $stmt->bind_param("is", $user['id'], $login_time);
        $stmt->execute();

        header("Location: dashboard.php");
        exit;
        } 
        else 
        {
            echo "You do not have permission to access this page."; 
        }
    }
    else
    {
        echo "Invalid email or password.";
    }

}
?>