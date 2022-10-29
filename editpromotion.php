<?php
$objConnect=mysqli_connect("localhost","root","")or die("can't connect to database");
mysqli_select_db( $objConnect, "DBProduct");
mysqli_query($objConnect, "SET NAMES utf8");

$sql="SELECT * FROM promotion WHERE  promotionId='$_GET[promotionId]'";
$result=mysqli_query($objConnect ,$sql);
$data = mysqli_fetch_array($result, MYSQLI_BOTH)
?>

<link rel="stylesheet" href="bootstrap.min.css ">
<div  style="text-align:center;width:100%;"class="card border-secondary mb-3" style="max-width: 20rem;">
<div  style="text-align:center;width:100%;"class="card-header">ข้อมูลโปรโมชั่น</div>
<div  style="text-align:center;width:100%;"class="card-body"></div>



<form method="GET" action="successeditpromotion.php">

<p>
<label for="promotionId">รหัสโปรโมชั่น</label>
<input type="text" name="promotionId" id="promotionId" value="<?=$data['promotionId'];?>"/>
</p>
<p>
<label for="promotionName">ชื่อโปรโมชั่น</label>
<input type="text" name="promotionName" id="promotionName" value="<?=$data['promotionName'];?>"/>
</p>
<p>
<label for="CDate">CDate</label>
<input type="Date" name="CDate" id="CDate" value="<?=$data['CDate'];?>" />
</p>
<p>
<label for="ModDate">ModDate</label>
<input type="Date" name="ModDate" id="ModDate" value="<?=$data['ModDate'];?>" />
</p>


<p>
    <input type="submit" value="แก้ไข" >


</p>
</form>

</p>






