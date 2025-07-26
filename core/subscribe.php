<?php
require_once '../config/mail.config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email  = filter_var($_POST['emal'], FILTER_SANITIZE_EMAIL);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $mail = createMailer();

        if($mail){
            try{
                $mail->addAddress($email);
                $mail->Subject = '🎉Welcome to Our Newsletter!';
                $mail->isHTML(true);
                $mail->Body = '<h1>Thank you for subscribing to Nananom Farms Newsletter!</h1>
                               <p>We are excited to have you on board. Stay tuned for the latest updates, offers, and insights.</p>';
                
                               $mail->send();
                file_put_contents('../logs/newsletter_logs.txt', date('Y-m-d H:i:s') . " - Email sent to: $email\n", FILE_APPEND);
                echo "✅ Subscription successful! A confirmation email has been sent to $email.";
            }catch (Exception $e) {
                file_put_contents('../logs/newsletter_logs.txt', date('Y-m-d H:i:s') . " - Error sending email: " . $mail->ErrorInfo . "\n", FILE_APPEND);
                echo "❌ Subscription failed. Please try again later.";
            }
        } else {
            file_put_contents('../logs/newsletter_logs.txt', date('Y-m-d H:i:s') . " - Mailer creation failed.\n", FILE_APPEND);
            echo "❌ Subscription failed. Please try again later.";
        }
    }
}else {
    echo "❌ Invalid request method.";
}

?>