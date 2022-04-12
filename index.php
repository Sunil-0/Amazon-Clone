<?php
session_start();
    $emphErr = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<?php
    if(isset($_POST["login"])){
        $_SESSION["emailphone"] = $_POST["emph"];
        $emailphone = $_POST["emph"];
        $connect = new mysqli("localhost", "root", "", "register");
        $emailnumcheck = "SELECT email, mobilenum FROM register WHERE mobilenum='$emailphone' OR email='$emailphone'";
        $emphq = $connect->query($emailnumcheck);
        if($emphq){
            $emphrow = $emphq->fetch_assoc();
            if ($emphq->num_rows > 0) {
                header("location: password.php");
            }
            else{
                $emphErr = "User Doesn't Exists";
            }
        }
    }
    ?>
    <div class="loginContainer">
        <div class="subloginContainer">
            <header>
                <img class="loginlogo" src="images/amazon.png" alt="image">
            </header>
            <section>
                <div class="login">
                    <div class="subLogin">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <p class="H1">Sign-In</p>
                        <label class="H3">Email or mobile phone number</label>
                        <input class="inp" type="text" name="emph" required>
                        <?php echo '<span class="err">'. $emphErr. '</span>' ?><br>
                        <input class="submit" type="submit" name="login" value="Login">
                    </form>
                    <div class="terms">
                        <p>By continuing, you agree to Amazon's <a href="">Conditions of Use</a> and <a href="">Privacy Notice.</a></p>
                    </div>
                    </div>
                </div>
                <div class="newuser">
                    <p class="divider"></p><p class="newto">New to Amazon?</p><p class="divider"></p>
                </div>
                <div>
                    <form action="Register.php"> 
                        <input class="create" type="submit" name="" value="Create your Amazon account"><br>
                    </form>
                </div>
            </section>
        </div>
</div>
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