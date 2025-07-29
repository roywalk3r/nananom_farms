<?php
require_once '../../database.php';
require_once '../config.php/mail.config.php';

function send_json($data, $status = 200) {
    http_response_code($status);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    send_json(['success' => false, 'message' => 'Method Not Allowed'], 405);
}

//Sanitize inputs
$full_name = trim($_POST['full_name'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validate inputs
if (empty($full_name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
    send_json(['success' => false, 'message' => 'All fields are required.'], 400);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    send_json(['success' => false, 'message' => 'Invalid email address.'], 400);
}

// Insert enquiry into database
$stmt = $conn->prepare('INSERT INTO enquiries (name, email, message, users_id) VALUES (?, ?, ?, ?)');
$stmt->bind_param('sssi', $full_name, $email, $message, $_SESSION['user_id'] ?? null);

if (!$stmt->execute()) {
    send_json(['success' => false, 'message' => 'Failed to submit enquiry.'], 500);
}

$stmt->close();
$conn->close();

//Send confirmation email
try{
    $mail = createMailer();
    $mail->addAddress($email, $full_name);
    $mail->Subject = 'Thank you for your enquiry - Nananom Farms';
    $mail->isHTML(true);
    $mail->Body = "<p>Dear $full_name,</p>
            <p>Thank you for reaching out to <em>Nananom Farms</em>. </p>
            <p>We have received your enquiry:</p>
            <blockquote>{$message}</blockquote>
            <p>We'll get back to you shortly.</p>
            <br><p>Best regards,<br>Nananom Farms Team</p>";
        $mail->send();
}catch(Exception $e){
    error_log('PHPMailer error: ' . $mail->ErrorInfo);
    send_json(['success' => false, 'message' => 'Failed to send confirmation email.'], 500);
}

send_json(['success' => true, 'message' => 'Enquiry submitted successfully. We will get back to you shortly.']);
?>
