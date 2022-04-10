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
            <img class="phnimg" src="images/Phones/p1.jpg" alt="Phones">
            <p>Samsung Galaxy M33 5G (Mystique Green, 6GB, 128GB Storage) | 5nm Processor | 6000mAh Battery...</p>
            <p class="slash">₹24,999</p><p class="price">₹17,999 (28% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/Phones/p2.jpg" alt="phones">
            <p>Redmi Note 11 (Horizon Blue, 6GB RAM, 128GB Storage)|90Hz FHD+ AMOLED Display | Qualcomm®</p>
            <p class="slash">₹19,999</p><p class="price">₹15,999 (20% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/Phones/p3.jpg" alt="phones">
            <p>realme narzo 50i (Carbon Black, 2GB RAM+32GB Storage) - with No Cost EMI/Additional Exchange Offers</p>
            <p class="slash">₹7,999</p><p class="price">₹7,499 (6% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/Phones/p4.jpg" alt="phones">
            <p>OPPO A31 (Fantasy White, 6GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers</p>
            <p class="slash">₹15,990</p><p class="price">₹12,989 (19% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
    </div>
    <div class="lct">
        <div class="card">
            <img class="phnimg" src="images/Phones/p5.jpg" alt="phones">
            <p>Lava X2 (2GB RAM, 32GB Storage) - Striped Cyan| Long Lasting 5000 mAh Battery| High Performance Octa Core</p>
            <p class="slash">₹7,999</p><p class="price">₹6,998 (13% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/Phones/p6.jpg" alt="phones">
            <p>Redmi Note 10S (Shadow Black, 6GB RAM, 64GB Storage) - Super Amoled Display | 64 MP Quad Camera</p>
            <p class="slash">₹16,999</p><p class="price">₹12,999 (24% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/Phones/p7.jpg" alt="phones">
            <p>Vivo Y73 (Diamond Flare, 8GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers</p>
            <p class="slash">₹24,990</p><p class="price">₹19,989 (20% off)</p>
            <input class="addtocart" value="Add To Cart" type="submit" name="l1">
        </div>
        <div class="card">
            <img class="phnimg" src="images/Phones/p8.jpg" alt="phones">
            <p>Samsung Galaxy M12 (Black,4GB RAM, 64GB Storage) 6000 mAh with 8nm Processor | True 48 MP Quad Camera</p>
            <p class="slash">₹12,999</p><p class="price">₹9,499 (27% off)</p>
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