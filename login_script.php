<?php
if(isset($_SESSION["email"]))
{
    echo "<script type='text/javascript'>location.href = './index.php';</script>";
}
include "includes/config.php";
session_start();


if (isset($_POST["submit"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    $sql = "SELECT * FROM users WHERE email='{$email}' AND password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION["email"] = $row["email"];
        $_SESSION['email']=$email;
        $_SESSION["password"] = $row["password"];
        echo "<script type='text/javascript'>location.href = './index.php';</script>";
    } else {
        echo '<script>alert("password and email do not match")</script>';
        echo "<script type='text/javascript'>location.href = './index.php';</script>";
    }
}
?>