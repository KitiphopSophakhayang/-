
<style>
        .position{
            
            padding: 1%;
            margin-left: 32%;
            margin-right: 25%;
            margin-top: 5%;     
        }
        
    
    </style>



<link rel="stylesheet" href="bootstrap.min.css ">
<div  style="text-align:center;width:100%;"class="card border-secondary mb-3" style="max-width: 20rem;">
<div  style="text-align:center;width:100%;"class="card-header">ข้อมูลลูกค้า</div>
<div  style="text-align:center;width:100%;"class="card-body"></div>


<form action="insertsuccesscustomer.php" method="GET">

<div class="position">
    
<p>
<label for="CustomerId">รหัสลูกค้า</label>
<input type="text" name="CustomerId" id="CustomerId" value=""/>
</p>
<p>
<label for="CustomerName">ชื่อลูกค้า</label>
<input type="text" name="CustomerName" id="CustomerName" value=""/>
</p>
<p>
<label for="Locations">ที่อยุ่</label>
<input type="text" name="Locations" id="Locations" value="" />
</p>
<p>
<label for="Email">อีเมลล์</label>
<input type="text" name="Email" id="Email" value="ํ"/>
</p>
<p>
<label for="DateOfBirth">วันเกิด</label>
<input type="date" name="DateOfBirth" id="DateOfBirth" value=""/>
</p>
<p>
<label for="CDate">CDate</label>
<input type="date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">ModDate</label>
<input type="date" name="ModDate" id="ModDate" value="" />
</p>
<p>
<label for="Postcode">รหัสไปษณีย์</label>
<input type="text" name="Postcode" id="Postcode" value="" />
</p>

<p>
    <input type="submit"  value="เพิ่มข้อมูลลูกค้า">
</p>
</div>

</form>
