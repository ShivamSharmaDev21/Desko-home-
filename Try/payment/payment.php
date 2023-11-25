<?php
    require'config.php';
if(isset($_POST['razorpay_payment_id']) && $_POST['razorpay_payment_id']!=='' && isset($_GET['order_id']) && $_GET['order_id'] !=='' ){
    $order_id = $_GET['order_id'];
    $payment_id =$_POST['razorpay_payment_id'];
     $sql3 = "update `orders` set `payment_id` = '$payment_id', `order_status` = '0'  where `order_id` = '$order_id'";
  $test = $conn->query($sql3) ; 
    $sql = "select SUM(quantity) as quantity, `desk_cart_id` from `order_details` where `order_id` = '$order_id' limit 1";
    $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // print_r($result->fetch_assoc());
     while($row = $result->fetch_assoc()) {
        //  print_r($row);
        $desk_cart_id = $row['desk_cart_id'];
     }
    $sql1 = "update `desk_cart` set `status` = 5 where `desk_cart_id` = '$desk_cart_id'";

if ($conn->query($sql1) === TRUE) {
  $sql2 = "update `cart` set `cart_status` = 5 where `desk_cart_id` = '$desk_cart_id'";
  if ($conn->query($sql2) === TRUE) {
      $url = "https://deskohome.com/order_success/".$order_id ;
     header("Location: $url");
        exit();
  }
} 
}
$url = "https://deskohome.com/order_success/".$order_id ;
     header("Location: $url");
        exit();
}else{
    $order_id = $_GET['order_id'];
    $payment_id =$_POST['razorpay_payment_id'];
    $url = "https://deskohome.com/order_success/".$order_id ;
     header("Location: $url");
        exit();
}


?>