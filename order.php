<?php
session_start();
echo "Total Amount to be paid <br>";
echo $_SESSION["totalprice"].'<br>';
echo "page under progress..."
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="home.php">
<input class="submit" type="submit" value="Home">
</form>
</body>
</html>