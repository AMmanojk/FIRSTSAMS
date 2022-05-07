<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Forgot-password</title>
</head>
<body>
    <form>
    <label style="color:blue"></label>
    <input class="input-2" type="text" name="usrname" placeholder="enter your username (or) ID:">
    <input class="input-2" type="integer" name="phnum" placeholder="enter your phone number:">


    <button onclick="myFunction()">Get-otp</button> 

    <script>
function myFunction() {
  alert("otp sent succesfully!");
}
</script>



    <input class="input-2" type="integer" name="otp" placeholder="enter otp:">
    
    
    <input class="input-2" type="password" name="newpass" placeholder="enter new password:">

    <input class="input-2" type="password" name="newpass" placeholder="confirm new password:">

    <button type="submit" onclick="myfunc1()" class="submit2">submit</button>

    <script>
function myfunc1() {
  alert("Page submitted succesfully!");
}
</script>



</form>
      
</body>
</html>