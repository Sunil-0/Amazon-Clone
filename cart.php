<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/stylehome.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['cart'])){
            $product_id = array_column($_SESSION['cart'], 'product_id');
            
            $conn = new mysqli("localhost", "root", "", "cart");
            $data = "SELECT * FROM cart";
            $result = $conn->query($data);
            while ($row = mysqli_fetch_assoc($result)){
                foreach ($product_id as $id){
                    if ($row['id'] == $id){
                        
                        echo "<p>$['price']</p>";
                        echo "<p>$['id']</p>";
                        $total = $total + (int)$row['product_price'];
                    }
                }
            }
        }else{
            echo "<h5>Cart is Empty</h5>";
        }
    ?>
</body>
</html>