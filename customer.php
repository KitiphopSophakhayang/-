

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


<div class="form-group">
<a href="insertcustomer.php" class="btn btn-success" role="button" aria-pressed="true">เพิ่มข้อมูลลูกค้า</a>
<a href="selectCus.php" class="btn btn-danger" role="button" aria-pressed="true">แก้ไขข้อมูลลูกค้า</a>


    <a href="main.html" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    </div>

</body>
</html>



<?php 
include "connect.php"; 
?>

<?php 
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

echo"<h1 class='text-center'>รายชื่อลูกค้า</h1>";
echo "<body style='background-color:silver'>";

echo"<table class='table'>";
echo"<thead class='thead-dark'>";
  echo"<tr>";
   echo" <th scope='col'>รหัสลูกค้า</th>";
    echo"<th scope='col'>ชื่อลูกค้า</th>";
    echo"<th scope='col'>ที่อยู่</th>";
    echo"<th scope='col'>อีเมลล์</th>";
    echo"<th scope='col'>วันเกิด</th>";
    echo"<th scope='col'>CDate</th>";
    echo"<th scope='col'>ModDate</th>";
    echo"<th scope='col'>รหัสไปษณีย์</th>";
  echo"</tr>";
  echo"</thead>";


if($result-> num_rows>0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {


          echo" <tbody>";
          echo"<tr>";
          echo"<th scope='col'>". $row['CustomerId']."</th>";
          echo" <td>".$row['CustomerName']."</td>";
          echo" <td>".$row['Locations']."</td>";
          echo" <td>".$row['Email']."</td>";
          echo" <td>".$row['DateOfBirth']."</td>";
          echo" <td>".$row['CDate']."</td>";
          echo" <td>".$row['ModDate']."</td>";
          echo" <td>".$row['Postcode']."</td>";
          echo"</tr>";
          echo" </tbody>";

    }
}
    else {
        echo "0 result";
    }

$conn->close();
?>