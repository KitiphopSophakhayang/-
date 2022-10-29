
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
<div  style="text-align:center;width:100%;"class="card-header">ข้อมูลโปรโมชั่น</div>
<div  style="text-align:center;width:100%;"class="card-body"></div>


<form action="successpromotion.php" method="GET">

<div class="position">
<p>
<label for="promotionId">รหัสโปรโมชั่น</label>
<input type="text" name="promotionId" id="promotionId" value=""/>
</p>
<p>
<label for="promotionName">ชื่อโปรโมชั่น</label>
<input type="text" name="promotionName" id="promotionName" value=""/>
</p>
<p>
<label for="CDate">CDate</label>
<input type="Date" name="CDate" id="CDate" value="" />
</p>
<p>
<label for="ModDate">ModDate</label>
<input type="Date" name="ModDate" id="ModDate" value="" />
</p>

<p>
    <input type="submit" value="เพิ่มโปรโมชั่น">
</p>

</div>

</form>