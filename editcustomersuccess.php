<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
$db = mysqli_select_db($objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql_update="UPDATE Customer SET Id='$_GET[Id]',Email='$_GET[Email]',Location='$_GET[Location]',Name='$_GET[Name]',DateOfBirth='$_GET[DateOfBirth]',CDate='$_GET[CDate]',Postcode='$_GET[Postcode]'
 WHERE Id='$_GET[Id]' ";

$result= mysqli_query( $objConnect, $sql_update);

if(!$result) {
echo "Can't Update!!!<br>";
} else {
echo "Success <br>";
echo "<br>";
echo "<a href='selectCus.php'>กลับสู่หน้าหลัก</a>";
}
?>