<?php include('Connect.php');
isset( $_POST['PaymentID'] ) ? $PaymentID = $_POST['PaymentID'] : $PaymentID = "";
isset( $_POST['PaymentName'] ) ? $PaymentName = $_POST['PaymentName'] : $PaymentName = "";

$sql=" UPDATE payment_t SET PaymentName= '$_REQUEST[PaymentName]' WHERE PaymentID='$PaymentID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Payment_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
