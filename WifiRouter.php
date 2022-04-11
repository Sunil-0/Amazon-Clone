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
                <input type='hidden' name='code' value="r1" />
            <img class="phnimg" src="images/Router/r1.jpg" alt="Phones">
            <p>TP-Link Archer AC1200 Archer C6 Wi-Fi Speed Up to 867 Mbps/5 GHz...</p>
            <p class="slash">₹4,999</p><p class="price">₹2,469 (51% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="r2" />
            <img class="phnimg" src="images/Router/r2.jpg" alt="phones">
            <p>TP-Link TL-WA850RE N300 Wireless Range Extender...</p>
            <p class="slash">₹2,999</p><p class="price">₹1,329 (56% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="r3" />
            <img class="phnimg" src="images/Router/r3.jpg" alt="phones">
            <p>TP-Link USB WiFi Adapter for PC(TL-WN725N), N150 Wireless...</p>
            <p class="slash">₹1,149</p><p class="price">₹469 (59% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="r4" />
            <img class="phnimg" src="images/Router/r4.jpg" alt="phones">
            <p>TP-Link AC750 Dual Band Wireless Cable Router, 4 10/100 LAN...</p>
            <p class="slash">₹2,399</p><p class="price">₹1,519 (37% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
    </div>
    <div class="lct">
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="r5" />
            <img class="phnimg" src="images/Router/r5.jpg" alt="phones">
            <p>TP-link N300 WiFi Wireless Router TL-WR845N | 300Mbps Wi-Fi Speed...</p>
            <p class="slash">₹1,699</p><p class="price">₹1,039 (39% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="r6" />
            <img class="phnimg" src="images/Router/r6.jpg" alt="phones">
            <p>TP-Link AC750 Wifi Range Extender | Up to 750Mbps | Dual Band WiFii...</p>
            <p class="slash">₹5,499</p><p class="price">₹1,709 (69% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="r7" />
            <img class="phnimg" src="images/Router/r7.jpg" alt="phones">
            <p>TP-Link USB Bluetooth Adapter for PC 4.0 Bluetooth Dongle Receiver...</p>
            <p class="slash">₹699</p><p class="price">₹469 (33% off)</p>
            <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="r8" />
            <img class="phnimg" src="images/Router/r8.jpg" alt="phones">
            <p>TP-LINK WiFi Dongle 300 Mbps Mini Wireless Network USB Wi-Fi</p>
            <p class="slash">₹629</p><p class="price">₹569 (10% off)</p>
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