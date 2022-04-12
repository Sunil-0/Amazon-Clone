<?php
    session_start();
    $emailphone = $_SESSION["emailphone"];
    $connect = new mysqli("localhost", "root", "", "register");
        $usercheck = "SELECT * FROM register WHERE mobilenum = '$emailphone' OR email = '$emailphone'";
        $unq = $connect->query($usercheck);
        if($unq){
            $Userrow = $unq->fetch_assoc();
            $UserName = $Userrow["name"];
            $UserEmail = $Userrow["email"];
            $UserMobile = $Userrow["mobilenum"];
            $Userpincode =$Userrow["pincode"];
            $Usercity = $Userrow["city"];
        }
    if(isset($_POST['home'])){
        header('location: home.php');
    }
    elseif(isset($_POST['logOut'])){
        header('location: index.php');
    }
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
<form method="post" action="" class="loginContainer">  

<div class="subloginContainer">
            <header>
                <img class="loginlogo" src="images/amazon.png" alt="image">
            </header>
            <section>
                <div class="login">
                    <div class="subLogin">
                        <p class="H1">User Details</p>
                        <div class="H3">
                            <label class="H3">Your Name</label>
                            <input class="cinput" type="text"  readonly value='<?php echo $UserName ?>' >
                        </div>
                        <div class="H3">
                            <label class="H3">Mobile number</label>
                            <input class="cinput" type="number" readonly value='<?php echo $UserMobile ?>' >
                        </div>
                        <div class="H3">
                            <label class="H3">Email</label>
                            <input class="cinput" type="email"  readonly value='<?php echo $UserEmail ?>' >
                        </div>
                        <div class="location">
                          <label class="H2">H.No.</label>
                          <input class="cinput" type="text"  readonly value='<?php echo $UserName ?>'><br>
                          <label class="H2">Pin-Code</label>
                          <input class="cinput" type="number"   readonly  value='<?php echo $Userpincode ?>'><br>
                          <label class="H2">City</label>
                          <input class="cinput" type="text"   readonly  value='<?php echo $Usercity ?>'><br>
                          <label class="H2">State</label>
                          <input class="cinput" type="text"  readonly  value='<?php echo $UserName ?>'><br>
                        </div>
                        <input class="submit" type="submit" value="Home Page" name='home'>
                        <input class="submit" type="submit" value="Log Out" name='logOut'>
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