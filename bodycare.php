<?php
$con = mysqli_connect("localhost","root","","cartitems");
if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die();}
?>
<?php
session_start();
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `cartitems` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<?php
if(!empty($_SESSION["shopping_cart"])) {
    $_SESSION['cart_count'] = count(array_keys($_SESSION["shopping_cart"]));
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylehome.css">
    <link rel="stylesheet" href="CSS/extra.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="cartdiv">
<a href="cart.php"><img style='padding:10px 15px 10px 10px;' src="images/cart-icon.png" />
<span style='font-size: 12px;
	line-height: 14px;
	background: #F68B1E;
	padding: 2px;
	border: 2px solid #fff;
	border-radius: 50%;
	position: absolute;
	left: 25px;
	color: #fff;
	width: 15px;
	height: 15px;
	text-align: center;'><?php echo $_SESSION['cart_count']; ?></span></a>
</div>

<!--- Laptops --->
<div class="laptopContainer">
    <div class="lct">
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="b1" />
            <img class="phnimg" src="images/BodyCare/b1.jpg" alt="Phones">
            <p>WOW Skin Science Onion Hair Oil for Hair Growth and Hair Fall Control - With Black Seed Oil Extracts - 200 ml</p>
            <p class="slash">₹599</p><p class="price">₹419 (30% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>

        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="b2" />
            <img class="phnimg" src="images/BodyCare/b2.jpg" alt="phones">
            <p>Vaseline Intensive Care Deep Moisture Nourishing Body Lotion 400 ml, Daily Moisturizer for Dry Skin, Gives...</p>
            <p class="slash">₹310</p><p class="price">₹235 (24% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>

        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="b3" />
            <img class="phnimg" src="images/BodyCare/b3.jpg" alt="phones">
            <p>Simple Kind to Skin Refreshing Facial Wash| For all Skin Types| No Soap| No Perfume| No Harsh Chemicals...</p>
            <p class="slash">₹375</p><p class="price">₹300 (20% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>

        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="b4" />
            <img class="phnimg" src="images/BodyCare/b4.jpg" alt="phones">
            <p>Indulekha Bringha Oil, Reduces Hair Fall And Grows New Hair, 100% Ayurvedic Oil, 100 ml</p>
            <p class="slash">₹430</p><p class="price">₹389 (10% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
    </div>

    <div class="lct">
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="b5" />
            <img class="phnimg" src="images/BodyCare/b5.jpg" alt="phones">
            <p>Dove Hair Fall Rescue Shampoo 1 L, For Damaged Hair, Hair Fall Control for Thicker Hair...</p>
            <p class="slash">₹799 </p><p class="price">₹656 (18% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="b6" />
            <img class="phnimg" src="images/BodyCare/b6.jpg" alt="phones">
            <p>Vaseline Intensive Care Aloe Fresh Hydrating Body Lotion 400 ml, Daily Moisturizer for Dry...</p>
            <p class="slash">₹345</p><p class="price">₹289 (16% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="b7" />
            <img class="phnimg" src="images/BodyCare/b7.jpg" alt="phones">
            <p>Pears body wash, 250 ml Wash| For all Skin Types| No Soap| No Perfume| No Harsh Chemicals...</p>
            <p class="slash">₹197</p><p class="price">₹106 (46% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="pb8" />
            <img class="phnimg" src="images/BodyCare/b8.jpg" alt="phones">
            <p>Tresemme Keratin Smooth Shampoo,With Keratin And Argan Oil For Smoother And Shinier Hair, 1 Ltr</p>
            <p class="slash">₹865</p><p class="price">₹690 (20% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
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