
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
<div  style="text-align:center;width:100%;"class="card-header">ข้อมูลสินค้า</div>
<div  style="text-align:center;width:100%;"class="card-body"></div>




<form action="successproduct.php" method="GET">


<div class="position">
<p>
<label for="ProductId">รหัสสินค้า </label>
<input type="text" name="ProductId" id="ProductId" value=""/>
</p>
<p>
<label for="ProductName">ชื่อสินค้า</label>
<input type="text" name="ProductName" id="ProductName" value=""/>
</p>
<p>
<label for="Price">ราคา</label>
<input type="text" name="Price" id="Price" value="" />
</p>
<p>
<label for="Deleted">Deleted </label>
<input type="text" name="Deleted" id="Deleted" value="ํY"/>
</p>
<p>
<label for="CDate">CDate</label>
<input type="date" name="CDate" id="CDate" value=""/>
</p>
<p>
<label for="ModDate">ModDate</label>
<input type="date" name="ModDate" id="ModDate" value="" />
</p>

<p>
    <input type="submit"  value="เพิ่มสินค้า">     
</p>
</div>

</form>