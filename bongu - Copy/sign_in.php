
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>sig-in with number</title>
</head>
<body>
    <form>

    <label>enter your phonenumber:</label><br>
    <input type="integer" name="phnum" placeholder="number without country code">

    
    <button onclick="myFunction()">Get-otp</button> 

    <script>
function myFunction() {
  alert("otp sent succesfully!");
}
</script>
<input class="input-2" type="integer" name="otp" placeholder="enter otp:">
<button type="submit" onclick="myfunc1()" class="submit2">Login</button>

<script>
function myfunc1() {
alert("Page submitted succesfully!");
}
</script>
    
</form>
</body>
</html>