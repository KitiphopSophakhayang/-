<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO Id, Email, Location, Name, DateOfBirth, CDate, Postcode) VALUES ('$_GET[Id]','$_GET[Email]','$_GET[Location]','$_GET[Name]','$_GET[DateOfBirth]','$_GET[CDate]','$_GET[Postcode]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!! <br>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='selectCus.php'> กลับไปหน้าก่อนหน้า </a>";
}
?>