<?php
require_once '../../database.php'; // Adjust path if needed

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $customer_name     = $_POST['customer_name'] ?? '';
    $email             = $_POST['email'] ?? '';
    $phone             = $_POST['phone'] ?? '';
    $service           = $_POST['service'] ?? '';
    $appointment_date  = $_POST['appointment_date'] ?? '';
    $created_at        = date('Y-m-d H:i:s');

    // users_id is optional
    $users_id = isset($_POST['users_id']) && $_POST['users_id'] !== '' ? $_POST['users_id'] : null;

    $stmt = $conn->prepare(
        "INSERT INTO bookings (customer_name, email, phone, service, appointment_date, created_at, users_id)
         VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    if (!$stmt) {
        die("❌ Prepare failed: " . $conn->error);
    }

    // Use i (int) for users_id, or 's' if it's a string. Use 'null' properly.
    $stmt->bind_param("ssssssi", $customer_name, $email, $phone, $service, $appointment_date, $created_at, $users_id);

    if ($stmt->execute()) {
        echo "✅ Booking successful!";
        redirectTo('booking.php');
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
