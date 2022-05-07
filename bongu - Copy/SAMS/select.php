<?php
session_start();
$con = mysqli_connect("localhost","root","","apply leave");

if(isset($_POST['submit']))
{
    $sem = $_POST['sem'];
    $course = $_POST['course'];
    $date = $_POST['date'];
    $purpose = $_POST['purpose'];

    $query = "INSERT INTO apply (sem,course,date,purpose) VALUES ('$sem','$course','$date','$purpose')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Apllied Succesfully";
        header("Location: apply.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: apply.php");
    }
}
?>