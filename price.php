<?php
    $price = $_GET["price"];
    $unit = $_GET["unit"];

    $total = $price*$unit;
    $vat =$total*0.07;
    $net =$total*$vat;


    echo "ราคาสินค้าต่อชิ้น $price <br>";
    echo "จำนวนชิ้นที่ซื้อ $unit <br>";
    echo "ราคารวม $total <br>";
    echo "ภาษีมูลค่าเพิ่ม $vat <br>";
    echo "ราคาสุทธิ $net";

?>