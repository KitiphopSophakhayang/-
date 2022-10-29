<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Promotion SET PromotionID='$_GET[PromotionID]',PromotionName='$_GET[PromotionName]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]'
 WHERE PromotionID='$_GET[PromotionID]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectpromotion.php'>กลับสู่หน้าหลัก</a>";
}
?>
