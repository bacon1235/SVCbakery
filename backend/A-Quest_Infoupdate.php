<?php include('Connect.php');
isset( $_POST['QNo'] ) ? $QNo = $_POST['QNo'] : $QNo = "";
isset( $_POST['Quest'] ) ? $Quest = $_POST['Quest'] : $Quest = "";
isset( $_POST['Answer'] ) ? $Answer = $_POST['Answer'] : $Answer = "";

$sql=" UPDATE Quest_Info SET Quest= '$_REQUEST[Quest]',
                            Answer= '$_REQUEST[Answer]' WHERE QNo='$QNo' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Quest_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
