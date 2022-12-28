<?php
include "./includes/config.php";
include "./includes/header.php";
if (!isset($_SESSION["email"])) {
    echo "<script type='text/javascript'>location.href = './index.php';</script>";
}
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $sql = "INSERT INTO tasks (name,description,date,type,email) VALUES ('{$name}' ,'{$description}','{$date}','{$type}','{$_SESSION["email"]}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert('Task has been added successfully'); </script>";
        echo "<script type='text/javascript'>location.href = './index.php';</script>";
    } else {
        echo "<script> alert('task not added! please try again '); </script>";
        echo "<script type='text/javascript'>location.href = './add.php';</script>";
    }
}

?>