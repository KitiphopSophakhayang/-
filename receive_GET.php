<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">     
            <link rel="stylesheet" href="style-table.css">
            <br>
            <div style="text-align:center;width:100%;">
            <h1> ยินดีตอนรับ </h1>
            </div>  
          
        </head>    
        <body> 
<?php
    $user_name = $_GET["fname"];
    echo "<P Align=center> คุณ $user_name <br></p>";
    $user_pass = $_GET["pname"];
     // echo "<P Align=center> your passname is $user_pass </p>";
?>

 <div class="screen">
<form action="main.html">
<B><P Align=center><input type="submit" name="suname" value="เข้าสู่ระบบ"> </form></P></B>
<style>
                body {
                    background-image: url('2.jpg');
                    background-repeat: no-repeat;
		            background-size: cover;
                }
</style>
</div>
</body> 
</html>