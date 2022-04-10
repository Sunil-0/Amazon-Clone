<?php
    session_start();
    $passwordErr = "";
    $emailphone = $_SESSION["emailphone"];
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $connect = new mysqli("localhost", "root", "", "register");
        $emphcheck = "SELECT password FROM register WHERE mobilenum = '$emailphone' OR email = '$emailphone'";
        $emphq = $connect->query($emphcheck);
        if($emphq){
            $detailrow = $emphq->fetch_assoc();
            $passwordcheck = $detailrow["password"];
            if($passwordcheck == $_POST["pasword"]){
                header("location: home.php");
            }else{
                $passwordErr = "Wrong Password";
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="loginContainer">
        <div class="subloginContainer">
            <header>
                <img class="loginlogo" src="images/amazon.png" alt="image">
            </header>
            <section>
                <div class="login">
                    <div class="subLogin">
                        <p class="H1">Sign-In</p>
                        <?php echo $emailphone ?> <a href="index.php">change</a><br>
                        <label class="npwd">Password</label>
                        <input class="inp" type="password" name="pasword" required>
                        <?php echo '<span style="color:red; font-size: 12px;">'. $passwordErr. '</span>' ?><br>
                        <input class="submit" type="submit" value="Continue">
                        <div class="signedin">
                            <input class="checkin" type="checkbox" name="checkin">Keep me signed in.
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