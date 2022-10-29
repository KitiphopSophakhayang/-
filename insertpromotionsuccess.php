<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Promotion (PromotionID, PromotionName, CDate, ModDate) VALUES ('$_GET[PromotionID]', '$_GET[PromotionName]', '$_GET[CDate]', '$_GET[ModDate]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert Promotion!!!<br>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='selectpromotion.php'>"." <<< กลับ"."</a>";
}
?>