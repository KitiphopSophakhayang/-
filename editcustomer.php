

<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM customer WHERE CustomerId ='$_GET[CustomerId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>


<link rel="stylesheet" href="bootstrap.min.css ">
<div  style="text-align:center;width:100%;"class="card border-secondary mb-3" style="max-width: 20rem;">
<div  style="text-align:center;width:100%;"class="card-header">ข้อมูลลูกค้า</div>
<div  style="text-align:center;width:100%;"class="card-body"></div>


<form method="get" action="editsuccesscustomer.php">

<p>
<label for="CustomerId">ชื่อลูกค้า</label>
<input type="text" name="CustomerId" id="CustomerId" value="<?=$data['CustomerId'];?>"/>
</p>
<p>
<label for="CustomerName">รหัสลูกค้า</label>
<input type="text" name="CustomerName" id="CustomerName" value="<?=$data['CustomerName'];?>"/>
</p>
<p>
<label for="Locations">ที่อยุ่</label>
<input type="text" name="Locations" id="Locations" value="<?=$data['Locations'];?>" />
</p>
<p>
<label for="Email">อีเมลล์</label>
<input type="text" name="Email" id="Email" value="<?=$data['Email'];?>" />
</p>
<p>
<label for="DateOfBirth">วันเกิด</label>
<input type="date" name="DateOfBirth" id="DateOfBirth" value="<?=$data['DateOfBirth'];?>"/>
</p>
<p>
<label for="CDate">CDate</label>
<input type="date" name="CDate" id="CDate" value="<?=$data['CDate'];?>"/>
</p>
<p>
<label for="ModDate">ModDate</label>
<input type="date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>
<p>
<label for="Postcode">รหัสไปษณีย์</label>
<input type="text" name="Postcode" id="Postcode" value="<?=$data['Postcode'];?>" />
</p>

<p>
    <input type="submit" value="แก้ไข" >
</p>
</form>

</p>

