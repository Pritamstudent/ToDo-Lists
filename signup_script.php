<?php

if(isset($_SESSION["email"]))
{
    echo "<script type='text/javascript'>location.href = './index.php';</script>";
}

include "./includes/config.php";
include "./includes/header.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$msg = "";
if (isset($_POST['submit'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirmpassword']));
    $code = mysqli_real_escape_string($conn, md5(rand()));
    
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $msg = "<div class = 'alert alert-danger'> {$email} is already registered </div>";
    } else {
        if ($confirm_password === $password) {
            $_SESSION['email']=$email;
            $sql = "INSERT INTO users (firstname,lastname,email,password,code) VALUES ('{$firstname}' ,'{$lastname}','{$email}','{$password}','{$code}' )";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<div style='display: none;'>";
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
                    $mail->isSMTP(); //Send using SMTP
                    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
                    $mail->SMTPAuth = true; //Enable SMTP authentication
                    $mail->Username = '	foodzomatoswiggy@gmail.com'; //SMTP username
                    $mail->Password = '9641035518'; //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
                    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('	foodzomatoswiggy@gmail.com');
                    $mail->addAddress($email);


                    //Content
                    $mail->isHTML(true); //Set email format to HTML
                    $mail->Subject = 'No reply mail';
                    $mail->Body = 'Here is the verification link <b><a href="http://localhost/login/?verification=' . $code . '">http://localhost/login/?verification=' . $code . '</a></b>';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";
                echo "<script> alert('You have been successfully registered'); </script>";
                echo "<script type='text/javascript'>location.href = './index.php';</script>";
            } else {
                echo "<script> alert('Resgistration unsuccessfull , please try again'); </script>";
                echo "<script type='text/javascript'>location.href = './index.php';</script>";
            }

        } else {
            echo '<script>alert("password and confirm password do not match")</script>';
            echo "<script type='text/javascript'>location.href = './index.php';</script>";

        }
    }



}
?>