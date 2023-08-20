<?php
include('Connect.php');
isset( $_POST['Order_No'] ) ? $Order_No = $_POST['Order_No'] : $Order_No = "";
isset( $_POST['StatusNo'] ) ? $StatusNo = $_POST['StatusNo'] : $StatusNo = "";
isset( $_POST['order_ss'] ) ? $order_ss = $_POST['order_ss'] : $order_ss = "";
isset( $_POST['cart_edit_name'] ) ? $cart_edit_name = $_POST['cart_edit_name'] : $cart_edit_name = "";

if($StatusNo=1) {
    $sql4=" UPDATE order_cart SET StatusNo= '$_REQUEST[StatusNo]', 
                            order_ss= '$_REQUEST[order_ss]',
                            cart_edit_name= '$_REQUEST[cart_edit_name]'
                            WHERE Order_No= '$_REQUEST[Order_No]' ";
    $result4=mysqli_query($conn,$sql4);

    if($result4){
    //echo "$sql4";
    echo "<script>alert('ปรับปรุงคำสั่งซื้อเรียบร้อย');</script>";
    echo "<script>window.location='T-manageorder.php';</script>";
    }else{
    echo "<script>alert('ไม่สามารถปรับปรุงคำสั่งซื้อได้');</script>";
    }
}
elseif ($StatusNo=2) {

    $sql5=" UPDATE order_cart SET StatusNo= '$_REQUEST[StatusNo]', 
    order_ss= '$_REQUEST[order_ss]',
    cart_edit_name= '$_REQUEST[cart_edit_name]'
    WHERE Order_No= '$_REQUEST[Order_No]' ";
    $result5=mysqli_query($conn,$sql5);

    if($result5){
    //echo "$sql5";
    echo "<script>alert('ปรับปรุงคำสั่งซื้อเรียบร้อย');</script>";
    echo "<script>window.location='T-manageorder.php';</script>";
    }else{
    echo "<script>alert('ไม่สามารถปรับปรุงคำสั่งซื้อได้');</script>";
    }
}
elseif ($StatusNo=3) {

    $sql6=" UPDATE order_cart SET StatusNo= '$_REQUEST[StatusNo]', 
    order_ss= '$_REQUEST[order_ss]',
    cart_edit_name= '$_REQUEST[cart_edit_name]'
    WHERE Order_No= '$_REQUEST[Order_No]' ";
    $result6=mysqli_query($conn,$sql6);

    if($result6){
    //echo "$sql6";
    echo "<script>alert('ปรับปรุงคำสั่งซื้อเรียบร้อย');</script>";
    echo "<script>window.location='T-manageorder.php';</script>";
    }else{
    echo "<script>alert('ไม่สามารถปรับปรุงคำสั่งซื้อได้');</script>";
    }
}

elseif($StatusNo=5) {

    $sql7=" UPDATE order_cart SET StatusNo= '$_REQUEST[StatusNo]', 
    order_ss= '$_REQUEST[order_ss]',
    cart_edit_name= '$_REQUEST[cart_edit_name]'
    WHERE Order_No= '$_REQUEST[Order_No]' ";
    $result7=mysqli_query($conn,$sql7);

    if($result7){
    //echo "$sql7";
    echo "<script>alert('ปรับปรุงคำสั่งซื้อเรียบร้อย');</script>";
    echo "<script>window.location='T-manageorder.php';</script>";
    }else{
    echo "<script>alert('ไม่สามารถปรับปรุงคำสั่งซื้อได้');</script>";
    }

}else{

    $sql1="SELECT * FROM order_cart_detail WHERE order_NO='$Order_No' ";
    $result1=mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_array($result1)) {
        $PD_NO=$row1['PD_NO'];
        $num=$row1['QTY'];
    
    $sql2="UPDATE product_info SET PD_amount=PD_amount + $num WHERE PD_NO='$PD_NO' ";
    $result=mysqli_query($conn,$sql2);
    }
    
    $sql=" UPDATE order_cart SET StatusNo=4 , cart_edit_name= '$_REQUEST[cart_edit_name]' WHERE Order_No='$Order_No' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('ยกเลิกคำสั่งซื้อเรียบร้อย');</script>";
        echo "<script>window.location='T-manageorder.php';</script>";
    }else{
        echo "<script>alert('ไม่สามารถยกเลิกคำสั่งซื้อได้');</script>";
    }

}


?>