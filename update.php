<?php
include "./includes/config.php";

if(isset($_POST['update_deadline']))
{
$update_date = $_POST['date'];
$update_id = $_POST['id'];
$sql = ("UPDATE tasks SET date='{$update_date}' where id ='{$update_id}' ") or die("query failed");
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "<script> alert('Date has been updated successfully'); </script>";
    echo "<script type='text/javascript'>location.href = './todos.php';</script>";
} else {
    echo "<script> alert('date not updated! please try again '); </script>";
    echo "<script type='text/javascript'>location.href = './todos.php';</script>";
}
}
?>
