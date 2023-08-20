<?php include('Connect.php');
isset( $_POST['typeID'] ) ? $typeID = $_POST['typeID'] : $typeID = "";
isset( $_POST['typeName'] ) ? $typeName = $_POST['typeName'] : $typeName = "";

$sql=" UPDATE goods_t SET typeName= '$_REQUEST[typeName]' WHERE typeID='$typeID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Goods_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
