<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProduct";
$conn = new mysqli($servername , $username , $password , $dbname);
if($conn->connect_error)
{
    die("connection failed" . $conn->connect_error);
}
echo "connection complete" ; 

echo "<br>";

$sql = "SELECT * FROM customer ";
$result = $conn->query($sql);
if($result->num_rows > 0 ){
    while($row = $result->fetch_assoc()){
        echo "<br>"."ชื่อลูกค้า" . $row["CustomerName"]. "<br>"."รหัสลูกค้า : ".$row["CustomerId"]."<br>"."ที่อยุ่" .$row["Location"]."<br>"

        ."อีเมลล์" .$row["Email"]."<br>"."วันเกิด." .$row["DateOfBirth"]."<br>"."CDate" .$row["CDate"]."<br>"

        ."ModDate" .$row["ModDate"]."<br>"."รหัสไปษณีย์" .$row["Postcode"]."<br>";
    }
    }
    else{
        echo "0 results";
    }

    echo "<br>";
    echo "<a href='customer.php'>เพิ่มข้อมูลลูกค้า</a>";

$conn->close();
?>

