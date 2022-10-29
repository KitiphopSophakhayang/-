<?php
$objConnect=mysqli_connect("localhost","root","") or die("can't connect to database");
mysqli_select_db($objConnect,"DBProduct");
mysqli_query($objConnect ,"SET NAMES utf8");

$sql_insert ="INSERT INTO customer(CustomerId, CustomerName, Locations , Email,DateOfBirth ,CDate , ModDate,Postcode) 
VALUES ('$_GET[CustomerId]','$_GET[CustomerName]','$_GET[Locations]','$_GET[Email]','$_GET[DateOfBirth]','$_GET[CDate]','$_GET[ModDate]','$_GET[Postcode]')";

$result=mysqli_query($objConnect, $sql_insert);

if(!$result) {
echo "Can't Insert!!!<br>";
echo "<br>";
echo "<a href='select.php'>"."กลับหน้าหลัก"."</a>";
} else {
echo "insertion data success <br>";
echo "<br>";
echo "<a href='customer.php'>กลับสู่หน้าข้อมูลลูกค้า</a>";
}
?>