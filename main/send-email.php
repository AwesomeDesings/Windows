<?php
    
    $name     = $_POST['name'];
    $lastname = $_POST['last'];
    $Subject  = $_POST['subject'];
    $email    = $_POST['email'];
    $message  = $_POST['message'];

    require "./vendor/autoload.php";
    use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\debug_backtrace;
    use PHPMailer\PHPMailer\SMTP;

	$mail = new PHPMailer(true);

	$mail->isSMTP();
	$mail->SMTPAuth = true;

   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->Host = "smtp.gmail.com";
    $mail-> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail-> Port = 587;

    $mail->Username = "lminiumdesigns.co.za@gmail.com";
    $mail->Password = "zxaiiqjlqunanwvo";

    $mail-> setFrom($email, $name);
    $mail-> addAddress("lminiumdesigns.co.za@gmail.com");
    $mail-> Subject = $Subject;
    $mail-> Body=$message;
    
    $mail->send();
    header ('Location: thank-you.php');

?>
