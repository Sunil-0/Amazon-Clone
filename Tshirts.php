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
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylehome.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!--- Header --->
<div class="header">
        <img class="logo" src="images/amazonlogo.png" alt="image">
        <div class="loccontainer">
         <a href="">
             <?php 
                echo $Userpincode."<br>"; 
                echo $Usercity;
             ?>
        </a>
        </div>
        <input class="search" type="search" name="" id="">
        <button class="searchbtn" type="submit"><i class="fa fa-search"></i></button>
        <div class="cartcontainer">
            <a href=""><i class="fa badge fa-lg" value=8>&#xf07a;</i></a>
        </div>
        <div class="profile">
            <a href=""><?php echo $UserName?></a>
        </div>
</div>

<!--- Laptops --->
<div class="laptopContainer">
    <div class="lct">
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t1.jpg" alt="Phones">
            <p>Men's Regular fit T-Shirt</p>
            <p class="slash">₹999</p><p class="price">₹509 (49% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t2.jpg" alt="phones">
            <p>Men's Solid Regular Fit Polo</p>
            <p class="slash">₹899</p><p class="price">₹529 (41% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t3.jpg" alt="phones">
            <p>Men's Regular fit T-Shirt</p>
            <p class="slash">₹1,699</p><p class="price">₹809 (52% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t4.jpg" alt="phones">
            <p>Men's Polo shirt</p>
            <p class="slash">₹899</p><p class="price">₹529 (41% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
    </div>
    <div class="lct">
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t5.jpg" alt="phones">
            <p>Men'sCrew Neck Sweatshirt</p>
            <p class="slash">₹2,499</p><p class="price">₹324 (87% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t6.jpg" alt="phones">
            <p>Men's Regular Fit T-Shirt</p>
            <p class="slash">₹699</p><p class="price">₹429 (39% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t7.jpg" alt="phones">
            <p>Men's Slim Polo Shirt</p>
            <p class="slash">₹799</p><p class="price">₹459 (43% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/T-Shirts/t8.jpg" alt="phones">
            <p>Men's Striped Regular Fit Polo</p>
            <p class="slash">₹1,699</p><p class="price">₹809 (52% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
    </div>
</div>

<!--- Footer --->
<div class="footer">
<div class="footertop">
    <div class="footerContent">
        <h2>Get to Know Us</h2>
        <p>About Us</p>
        <p>Careers</p>
        <p>Press Releases</p>
        <p>Amazon Cares</p>
        <p>Gift a Smile</p>
        <p>Amazon Science</p>
    </div>
    <div class="footerContent">
        <h2>Contact with us</h2>
        <p>Facebook</p>
        <p>Twitter</p>
        <p>Instagram</p>
    </div>
    <div class="footerContent">
        <h2>Make Money with us</h2>
        <p>Sell on Amazon</p>
        <p>Sell under Amazon Accelerator</p>
        <p>Amazon Global Selling</p>
        <p>Become an Affiliate</p>
        <p>Fulfilment by Amazon</p>
        <p>Advertise Your Products</p>
        <p>Amazon Pay on Merchants</p>
    </div>
    <div class="footerContent">
        <h2>Let us help you</h2>
        <p>COVID-19 and Amazon</p>
        <p>Your Account</p>
        <p>Returns Centre</p>
        <p>100% Purchase Protection</p>
        <p>Amazon App Download</p>
        <p>Amazon Assistant Download</p>
        <p>Help</p>
    </div>
</div>
<div class="footerbottom">
    <p>Australia</p> <p>Brazil</p> <p>Canada</p> <p>China</p> <p>France</p> <p>Germany</p> <p>India</p>
</div>

</body>
</html>