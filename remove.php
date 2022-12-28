<?php
include "./includes/config.php";

if(isset($_POST['remove']))
{
$remove_id = $_POST['id'];
$sql = ( "DELETE FROM `tasks` WHERE id = '$remove_id'") or die('query failed');;
$result = mysqli_query($conn,$sql);
if ($result) {
    echo "<script> alert('task has been deleted successfully'); </script>";
    echo "<script type='text/javascript'>location.href = './todos.php';</script>";
} else {
    echo "<script> alert('task not deleted! please try again '); </script>";
    echo "<script type='text/javascript'>location.href = './todos.php';</script>";
}
}
?>