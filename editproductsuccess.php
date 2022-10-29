<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Product SET PId='$_GET[PId]',Price='$_GET[Price]',Name='$_GET[ProductName]',CDate='$_GET[CDate]',ModDate='$_GET[ModDate]',Deleted='$_GET[Deleted]'
 WHERE PId='$_GET[PId]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectproduct.php'>กลับสู่หน้าหลัก</a>";
}
?>