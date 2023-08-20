<?php include('Connect.php');
isset( $_POST['PaymentID'] ) ? $PaymentID = $_POST['PaymentID'] : $PaymentID = "";
isset( $_POST['PaymentName'] ) ? $PaymentName = $_POST['PaymentName'] : $PaymentName = "";

$sql="DELETE FROM payment_t WHERE PaymentID='$_REQUEST[PaymentID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Payment_Tlist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว