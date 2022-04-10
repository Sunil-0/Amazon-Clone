<?php
    session_start();
    $connect = new mysqli("localhost", "root", "", "register");
    
?>
<!DOCTYPE HTML>  
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
  </head>
<body>  

<?php
    
$nameErr = $emailErr = $numErr = $passErr = "";
$name = $email = $mobilenumber = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$_SESSION["name"] = $_POST["fname"];
    //$_SESSION["email"] = $_POST["email"];
    //$_SESSION["mobilenumber"] = $_POST["mnum"];
  if (empty($_POST["fname"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }else{
        $emailcheck = "SELECT email FROM register WHERE email='$email'";
        $ecq = $connect->query($emailcheck);
        if($ecq){
            $emailrow = $ecq->fetch_assoc();
            if ($ecq->num_rows > 0){
                $emailErr = "Email Already exists";
            }
        }
    }
  }

  if (empty($_POST["pwd"])){
      $passErr = "Password is required";
  }else{
    $password = $_POST['pwd'];   
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
    }
    }
  if (empty($_POST["mnum"])){
      $numErr = "Mobile Number is required";
  }else{
      $mobilenumber = $_POST["mnum"];
      if(strlen($mobilenumber) != 10){
            $numErr =  "Mobile Number must be of 10 digits";
      }else{
        $numcheck = "SELECT * FROM register WHERE mobilenum='$mobilenumber'";
        $ncq = $connect->query($numcheck);
        if($ncq){  
            $row = $ncq->fetch_assoc();
            if ($ncq->num_rows > 0) {
                $numErr = "Mobile Number Already exists";
            }
        }
    } 
  }
  if(empty($nameErr) && empty($emailErr) && empty($numErr) && empty($passErr)){
        $name = $_POST["fname"];
        $email = $_POST["email"];
        $mobilenumber = $_POST["mnum"];
        $password = $_POST["pwd"];
        $address = $_POST["address"];
        $pincode = $_POST["pincode"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $insert = "INSERT INTO register VALUES ('$name', '$email', '$mobilenumber', '$address', '$pincode', '$city', '$state', '$password')";
        $db = $connect->query($insert);
        if($db){
            echo "Sucessfully inserted";
        }
        header("Location: index.php");
  }
}
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"   class="loginContainer">  

<div class="subloginContainer">
            <header>
                <img class="loginlogo" src="images/amazon.png" alt="image">
            </header>
            <section>
                <div class="login">
                    <div class="subLogin">
                        <p class="H1">Create Account</p>
                        <div class="H3">
                            <label class="H3">Your Name</label>
                            <input class="cinput" type="text" name="fname" >
                            <?php echo '<span class="err">'. $nameErr. '</span>' ?><br>
                        </div>
                        <div class="H3">
                            <label class="H3">Mobile number</label>
                            <input class="cinput" type="number" name="mnum" >
                            <?php echo '<span class="err">'. $numErr. '</span>' ?><br>
                        </div>
                        <div class="H3">
                            <label class="H3">Email</label>
                            <input class="cinput" type="email" name="email" >
                            <?php echo '<span class="err">'. $emailErr. '</span>' ?><br>
                        </div>
                        <div class="location">
                          <label class="H2">H.No.</label>
                          <input class="cinput" type="text" name="address" minlength=10 maxlength=50 required><br>
                          <label class="H2">Pin-Code</label>
                          <input class="cinput" type="number" name="pincode" minlength=5 maxlength=6 required><br>
                          <label class="H2">City</label>
                          <input class="cinput" type="text" name="city" minlength=5 maxlength=15 required><br>
                          <label class="H2">State</label>
                          <input class="cinput" type="text" name="state" minlength=5 maxlength=15 required><br>
                        </div>
                        <div class="H3">
                            <label class="H3">Password</label>
                            <input class="cinput" type="password" name="pwd">
                            <?php echo '<span class="err">'. $passErr. '</span>' ?><br>
                            <p class="pwdhint">Passwords must be at least 8 characters, [A-Z], [a-z] and special charecter.</p>
                        </div>

                        <input class="submit" type="submit" value="Register">
                        <div class="terms">
                            <p>Already have an account? <a href="index.php">Sign in</a></p><br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
</form>
<footer>
        <div class="line"></div>
        <div class="footerterms">
            <a class="footerelements" href="">Conditions of Use </a>
            <a class="footerelements" href=""> Privacy Notice </a>
            <a class="footerelements" href=""> Help </a>
        </div>
        <p class="copyright">© 1996-2022, Amazon.com, Inc. or its affiliates</p>
    </footer>

</body>
</html>