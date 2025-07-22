<?php
require 'session.php';
session_start();
session_unset();
session_destroy();
logout();
header('Location: login.php');
exit;
?>
