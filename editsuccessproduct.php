<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE product
SET ProductId ='$_GET[ProductId]',ProductName='$_GET[ProductName]',Price='$_GET[Price]',Deleted='$_GET[Deleted]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]' 
 WHERE ProductId ='$_GET[ProductId]' ";



$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='product.php'>กลับสู่หน้าหลัก</a>";
}
?>

