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


<div class="img">
     <div class="alert alert-dismissible alert-light">
    <img src="FMCG.jpg" alt="" width="1200px" height="400px">
    </div>
</div>  
        <div class="img">
        <div class="alert alert-dismissible alert-light">
        <h4 class="product" >สินค้า</h4>

        <a class="imgpro" href="detail-champoo.html">
        <img src="champoo.jpg" width="200" height="210">
        </a>

        <a class="imgpro" href="detail-conditioner.html">
        <img src="detegent.jpg" width="200" height="210">
        </a>

        <a class="imgpro" href="detail-washingpowder.html">
        <img src="condision.jpg" width="200px" height="210px">
        </a>
        
        <a class="imgpro" href="detail-washingpowder.html">
        <img src="toothpaste.jpg" width="200px" height="210px">
        </a>
 
        <a class="imgpro" href="detail-washingpowder.html">
        <img src="foam.jpg" width="200px" height="210px">
        </a>

        <hr>
        <p class="dt" >รูปรายละเอียดสินค้าต่างๆ</p>
        <hr>
        
        <h5>ข้อมูลสินค้า</h5><br>





<div class="form-group">
<a href="insertproduct.php" class="btn btn-success" role="button" aria-pressed="true">เพิ่มข้อมูลสินค้า</a>


    <a href="main.html" class="btn btn-primary">กลับสู่หน้าหลัก</a>
    </div>

</body>
</html>

<?php 
include "connect.php"; 
?>

<?php 
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

echo"<h1 class='text-center'>สินค้า</h1>";
echo "<body style='background-color:silver'>";

echo"<table class='table'>";
echo"<thead class='thead-dark'>";
  echo"<tr>";
   echo" <th scope='col'>รหัสลูกค้า</th>";
    echo"<th scope='col'>ชื่อสินค้า</th>";
    echo"<th scope='col'>ราคาสินค้า</th>";
    echo"<th scope='col'>CDate</th>";
    echo"<th scope='col'>ModDate</th>";
    echo"<th scope='col'>Deleted</th>";
  echo"</tr>";
  echo"</thead>";


if($result-> num_rows>0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {


          echo" <tbody>";
          echo"<tr>";
          echo"<th><a href='editproduct.php?ProductId=$row[ProductId]'>".$row['ProductId']."</th>";
          echo" <td>".$row['ProductName']."</td>";
          echo" <td>".$row['Price']."</td>";
          echo" <td>".$row['CDate']."</td>";
          echo" <td>".$row['ModDate']."</td>";
          echo" <td>".$row['Deleted']."</td>";
          echo"</tr>";
          echo" </tbody>";
        
    }
   


}
    else {
        echo "0 result";
    }

$conn->close();
?>




