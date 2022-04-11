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
                <input type='hidden' name='code' value="p1" />
                <img class="phnimg" src="images/Phones/p1.jpg" alt="Phones">
                <p>Samsung Galaxy M33 5G (Mystique Green, 6GB, 128GB Storage) | 5nm Processor | 6000mAh Battery...</p>
                <p class="slash">₹24,999</p><p class="price">₹17,999 (28% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
            </form>
            
        </div>

        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="p2" />
                <img class="phnimg" src="images/Phones/p2.jpg" alt="phones">
                <p>Redmi Note 11 (Horizon Blue, 6GB RAM, 128GB Storage)|90Hz FHD+ AMOLED Display | Qualcomm®</p>
                <p class="slash">₹19,999</p><p class="price">₹15,999 (20% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>

        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="p3" />
                <img class="phnimg" src="images/Phones/p3.jpg" alt="phones">
                <p>realme narzo 50i (Carbon Black, 2GB RAM+32GB Storage) - with No Cost EMI/Additional Exchange Offers</p>
                <p class="slash">₹7,999</p><p class="price">₹7,499 (6% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
                </form>
        </div>

        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="p4" />
                <img class="phnimg" src="images/Phones/p4.jpg" alt="phones">
                <p>OPPO A31 (Fantasy White, 6GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers</p>
                <p class="slash">₹15,990</p><p class="price">₹12,989 (19% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>
    </div>

    <div class="lct">
        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="p5" />
                <img class="phnimg" src="images/Phones/p5.jpg" alt="phones">
                <p>Lava X2 (2GB RAM, 32GB Storage) - Striped Cyan| Long Lasting 5000 mAh Battery| High Performance Octa Core</p>
                <p class="slash">₹7,999</p><p class="price">₹6,998 (13% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>

        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="p6" />
                <img class="phnimg" src="images/Phones/p6.jpg" alt="phones">
                <p>Redmi Note 10S (Shadow Black, 6GB RAM, 64GB Storage) - Super Amoled Display | 64 MP Quad Camera</p>
                <p class="slash">₹16,999</p><p class="price">₹12,999 (24% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>

        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="p7" />
                <img class="phnimg" src="images/Phones/p7.jpg" alt="phones">
                <p>Vivo Y73 (Diamond Flare, 8GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers</p>
                <p class="slash">₹24,990</p><p class="price">₹19,989 (20% off)</p>
                <button type='submit' class='buy'>Buy Now</button>
            </form>
        </div>

        <div class="card">
            <form method='post' action=''>
                <input type='hidden' name='code' value="p8" />
                <img class="phnimg" src="images/Phones/p8.jpg" alt="phones">
                <p>Samsung Galaxy M12 (Black,4GB RAM, 64GB Storage) 6000 mAh with 8nm Processor | True 48 MP Quad Camera</p>
                <p class="slash">₹12,999</p><p class="price">₹9,499 (27% off)</p>
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