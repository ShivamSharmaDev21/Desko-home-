<?php 
$image = $_POST['image'];
 print_r($image);die;
$location = "images/";

$image_parts = explode(";base64,", $image);
print_r($image_parts);die;
$image_base64 = base64_decode($image_parts[1]);

$filename = "screenshot_".uniqid().'.png';
// echo $filename;die;

$file = $location . $filename;

file_put_contents($file, $image_base64);
?>