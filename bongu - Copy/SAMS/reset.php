<?php
session_start();
$con = mysqli_connect("localhost","root","","reseta");

if(isset($_POST['submit']))
{
    $Currentpassword= $_POST['Currentpassword'];
    $Newpassword = $_POST['NewPassword'];
    $confirmpassword = $_POST['confirmpassword'];
    

    $query = "INSERT INTO apply (Currentpassword,Newpassword,confirmpassword) VALUES ('$Currentpassword','$Newpassword','$confirmpassword');
    $query_run = mysqli_query($con, $query);

   
}

?>