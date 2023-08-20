<?php
include('Connect.php');
isset( $_POST['Order_No'] ) ? $Order_No = $_POST['Order_No'] : $Order_No = "";
isset( $_POST['StatusNo'] ) ? $StatusNo = $_POST['StatusNo'] : $StatusNo = "";
isset( $_POST['order_ss'] ) ? $order_ss = $_POST['order_ss'] : $order_ss = "";
isset( $_POST['cart_edit_name'] ) ? $cart_edit_name = $_POST['cart_edit_name'] : $cart_edit_name = "";

$sql=" UPDATE order_cart SET StatusNo= '$_REQUEST[StatusNo]', 
                            order_ss= '$_REQUEST[order_ss]',
                            cart_edit_name= '$_REQUEST[cart_edit_name]'
                            WHERE Order_No= '$_REQUEST[Order_No]' ";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "$sql";
    echo "<script>alert('ปรับปรุงคำสั่งซื้อเรียบร้อย');</script>";
    echo "<script>window.location='A-manageorder.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถปรับปรุงคำสั่งซื้อได้');</script>";
}


?>