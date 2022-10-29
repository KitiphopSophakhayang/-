<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM product WHERE ProductId ='$_GET[ProductId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<link rel="stylesheet" href="bootstrap.min.css ">
<div  style="text-align:center;width:100%;"class="card border-secondary mb-3" style="max-width: 20rem;">
<div  style="text-align:center;width:100%;"class="card-header">ข้อมูลสินค้า</div>
<div  style="text-align:center;width:100%;"class="card-body"></div>




<form method="GET" action="editsuccessproduct.php">
<p>
<label for="ProductId">รหัสสินค้า</label>
<input type="text" name="ProductId" id="ProductId" value="<?=$data['ProductId'];?>"/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value="<?=$data['ProductName'];?>"/>
</p>
<p>
<label for="Price">ราคา</label>
<input type="text" name="Price" id="Price" value="<?=$data['Price'];?>" />
</p>
<p>
<label for="Deleted">Deleted</label>
<input type="text" name="Deleted" id="Deleted" value="<?=$data['Deleted'];?>" />
</p>
<p>
<label for="CDate">CDate</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">ModDate</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>