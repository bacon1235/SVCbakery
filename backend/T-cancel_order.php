<?php
include('Connect.php');
$Order_No=$_GET['Order_No'];

$sql1="SELECT * FROM order_cart_detail WHERE order_NO='$Order_No' ";
$result1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_array($result1)) {
    $PD_NO=$row1['PD_NO'];
    $num=$row1['QTY'];

$sql2="UPDATE product_info SET PD_amount=PD_amount + $num WHERE PD_NO='$PD_NO' ";
$result=mysqli_query($conn,$sql2);
}

$sql=" UPDATE order_cart SET StatusNo=4 WHERE Order_No='$Order_No' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('ยกเลิกคำสั่งซื้อเรียบร้อย');</script>";
    echo "<script>window.location='T-manageorder.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถยกเลิกคำสั่งซื้อได้');</script>";
}


?>