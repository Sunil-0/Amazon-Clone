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
</div>
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
                <input type='hidden' name='code' value="l1" />
                <img class="lapimg" src="images/Laptops/l1.jpg" alt="laptops">
                <p>HONOR MagicBook X 14, Intel Core i5-10210U 14 inch (35.56 cm) FHD IPS Anti-Glare Thin and Light Laptop...</p>
                <p class="slash">₹64,999</p><p class="price">₹46,990 (28% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>

        <div class="card">
                <form method='post' action=''>
                <input type='hidden' name='code' value="l2" />
                <img class="lapimg" src="images/Laptops/l2.jpg" alt="laptops">
                <p>ASUS VivoBook 14 (2021), 14-inch (35.56 cm) HD, Intel Core i3-1005G1 10th Gen, Thin and Light Laptop (8GB/1TB...</p>
                <p class="slash">₹33,990</p><p class="price">₹43,990 (23% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>

        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="l3" />
                <img class="lapimg" src="images/Laptops/l3.jpg" alt="laptops">
                <p>Lenovo IdeaPad Slim 3 10th Gen Intel Core i3 15.6 HD Thin and Light Laptop (8GB/1TB HDD/Windows 11/MS Office...</p>
                <p class="slash">₹34,999</p><p class="price">₹57,290 (39% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>

        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="l4" />
                <img class="lapimg" src="images/Laptops/l4.jpg" alt="laptops">
                <p>Dell New Vostro 3405 Laptop AMD Ryzen 3-3250U 14 inches FHD Display, 8GB DDR4, 512GB SSD, Windows...</p>
                <p class="slash">₹38,490</p><p class="price">₹49,990 (23% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>
    </div>

    <div class="lct">
        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="l5" />
                <img class="lapimg" src="images/Laptops/l5.jpg" alt="laptops">
                <p>Mi Notebook Pro QHD+ IPS Anti Glare Display Intel Core i5-11300H 11th Gen 14 inch(35.56 cms) Thin & Light...</p>
                <p class="slash">₹60,499</p><p class="price">₹74,999 (19% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>

        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="l6" />
                <img class="lapimg" src="images/Laptops/l6.jpg" alt="laptops">
                <p>ASUS VivoBook K15 OLED (2021), 15.6" (39.62 cms) FHD OLED, Intel Core i3-1115G4 11th Gen, Thin and Light</p>
                <p class="slash">₹50,009</p><p class="price">₹62,990 (21% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>

        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="l7" />
                <img class="lapimg" src="images/Laptops/l7.jpg" alt="laptops">
                <p>HP 255 G8 Laptop 3K9U1PA (AMD Ryzen 3-3300/4GB Ram/ 1TB HDD/ 15.6" Inch HD/ Windows 10 Home / Da...</p>
                <p class="slash">₹34,890</p><p class="price">₹35,530 (5% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>

        <div class="card">
        <form method='post' action=''>
                <input type='hidden' name='code' value="l8" />
                <img class="lapimg" src="images/Laptops/l8.jpg" alt="laptops">
                <p>HP 15s AMD Ryzen 3- 5300U 15.6 inches FHD Laptop (8GB RAM/512GB SSD , Micro-Edge, Anti-Glare Display/Radeon...</p>
                <p class="slash">₹39,990</p><p class="price">₹48,933 (18% off)</p>
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
</form>

</body>
</html>