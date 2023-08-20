<?php include('Connect.php');
isset( $_POST['PaymentID'] ) ? $PaymentID = $_POST['PaymentID'] : $PaymentID = "";
isset( $_POST['PaymentName'] ) ? $PaymentName = $_POST['PaymentName'] : $PaymentName = "";

$s = "SELECT PaymentID FROM Payment_T WHERE PaymentID='$PaymentID' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO Payment_T (PaymentID, PaymentName) VALUES ('$PaymentID' ,'$PaymentName') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Payment_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Payment_Tlist.php';</script>";
}
?>