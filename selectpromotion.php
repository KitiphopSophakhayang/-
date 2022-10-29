<?php

//connect to database

$objConnect = mysqli_connect("localhost","root","")or die("can't connect to database");

$db = mysqli_select_db($objConnect, "DBProduct");

mysqli_query($objConnect, "SET NAMES utf8");



if($objConnect->connect_error)

{

    die("connection failed". $conn->connect_error);



}

echo "connection complete ";



//select data from table

$sql = "SELECT PromotionID, PromotionName, CDate, ModDate FROM Promotion";

$result = $objConnect->query($sql);



echo "<br>";

if ($result->num_rows > 0) {

  // head of table

 echo "<table border='2px'>";

 echo "<tr bgcolor='pink'>"; echo "<th width='200px'>รหัสโปรโมชั่น"; echo "</th>";echo "<th> ชื่อโปรโมชั่น";echo "</th>"; echo "<th> วันเริ่มโปร"; echo "</th>";echo "<th> วันหมดโปร: ";
 
 echo "</tr>";

// output data of each row

 while($row = $result->fetch_assoc()) {

    echo "<td><a href='editpromotion.php?PromotionID=$row[PromotionID]'>".$row["PromotionID"]."</a></td>"."<td>".$row["PromotionName"]."</td>"."<td>".$row["CDate"]."</td>"."<td>".$row["ModDate"]."</td>";

 echo "</tr>"."<br>";



  }

  echo "</table>";

}

else {

    echo "0 results";

  }




  //menu add data to table

  echo "<br>";

  echo "<a href='insertpromotion.php'>เพิ่มโปรโมชั่น</a>";

 

  $objConnect->close();

?>
