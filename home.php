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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylehome.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
            <a href="cart.php"><i class="fa badge fa-lg" value=<?php $_SESSION['cart_count'] ?>>&#xf07a;</i></a>
        </div>
        <div class="profile">
            <a href="profile.php"><?php echo $UserName?></a>
        </div>
    </div>

    <!--- Image Slider --->
    <div class="slideshow-container">
        <div class="mySlides fade">
                <img src="images/amazonhome1.jpg" style="width:100%; height: 400px">
        </div>

        <div class="mySlides fade">
            <img src="images/amazonhome2.jpg" style="width:100%; height: 400px">
        </div>

        <div class="mySlides fade">
            <img src="images/amazonhome3.jpg" style="width:100%; height: 400px">
        </div>
        <div class="mySlides fade">
            <img src="images/amazonhome4.jpg" style="width:100%; height: 400px">
        </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>
    <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slides[slideIndex-1].style.display = "block";  
    }
    </script>

    <!--- Products --->
    <div class="productContainer">
        <a href="Laptop.php">
        <div class="product">
            <img src="images/p1.jpg" alt=""><br>
            <div class="pricetag">
                <p class="price">₹21,999.00 - ₹64,999.00</p>
            </div>
        </div>
        </a>
        <a href="phone.php">
        <div class="product">
            <img src="images/p2.jpg" alt=""><br>
            <div class="pricetag">
                <p class="price">₹21,999.00 - ₹64,999.00</p>
            </div>
        </div>
        </a>
        <a href="bodycare.php">
        <div class="product">
            <img src="images/p3.jpg" alt=""><br>
            <div class="pricetag">
                <p class="price">₹94.00 - ₹1,696.00</p>
            </div>
        </div>
        </a>
        <a href="Tshirts.php">
        <div class="product">
            <img src="images/p4.jpg" alt=""><br>
            <div class="pricetag">
                <p class="price">₹449.00 - ₹2,331.00</p>
            </div>
        </div>
        </a>
        <a href="WifiRouter.php">
        <div class="product">
            <img src="images/p5.jpg" alt=""><br>
                <div class="pricetag">
                <p class="price">₹21,999.00 - ₹64,999.00</p>
            </div>
        </div>
        </a>
        <a href="HeadPhone.php">
        <div class="product">
            <img src="images/p6.jpg" alt=""><br>
                <div class="pricetag">
                <p class="price">₹21,999.00 - ₹64,999.00</p>
            </div>
        </div>
        </a>
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
    </div>
</body>
</html>