<?php
session_start();
$con = mysqli_connect("localhost","root","","feedback");

if(isset($_POST['submita']))
{
    $mentor = $_POST['mentor'];
    $message = $_POST['message'];
    $reason = $_POST['reason'];

    $query = "INSERT INTO apply (mentor,message,reason) VALUES ('$mentor','$message','$reason')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Apllied Succesfully";
        header("Location: fed.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: fed.php");
    }
}
?>