<?php
session_start();
$status="";
if (isset($_POST['remove'])){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $_SESSION['cart_count'] = $_SESSION['cart_count'] - 1;
      $status = "<div class='box' style='color:red;'>Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}

if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/extra.css">
</head>
<body>
<table class="table" style="width: 500px;">
    <tbody>
        <tr>
            <td></td>
            <td>ITEM NAME</td>
            <td>ITEMS TOTAL</td>
        </tr>	
        <?php		
        foreach ($_SESSION["shopping_cart"] as $product){
        ?>
        <tr>
            <td>
                <img style="height: 100px; width: 80px" src='<?php echo $product["image"]; ?>' width="50" height="40" />
            </td>
            <td><?php echo $product["name"]; ?><br />
            <form method='post' action=''>
                <input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
                <input class="cartbtn" type='submit' name='remove' value="Remove" />
            </form>
            </td>
            <td><?php echo "$".$product["price"]; ?></td>
            
            </tr>
            <?php
            $total_price += ($product["price"]*$product["quantity"]);
            $_SESSION['totalprice'] = $total_price;
            }
            ?>
            <tr>
            <td>
            <form action="home.php">
                <input class="cartbtn" type="submit" value="Home">
            </form>
            </td>
            <td colspan="5" align="right">
            <strong>
                TOTAL: <?php
                            echo "$".$total_price;
                        ?>
                <form action="order.php" method="post">
                    <input class="cartbtn" type="submit" name="order" value="Order">
                </form>
            </strong>
            </td>
        </tr>
    </tbody>
</table>
<div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
</div>
</body>
</html>

