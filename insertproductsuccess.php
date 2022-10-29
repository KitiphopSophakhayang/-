<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Product(PId, Price, ProductName, CDate, ModDate, Deleted) VALUES ('$_GET[PId]','$_GET[Price]','$_GET[ProductName]','$_GET[CDate]','$_GET[ModDate]','$_GET[Deleted]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='selectproduct.php'>"." <<< กลับ"."</a>";
}
?>