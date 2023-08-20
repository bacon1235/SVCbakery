<?php include('Connect.php');
isset( $_POST['typeID'] ) ? $typeID = $_POST['typeID'] : $typeID = "";
isset( $_POST['typeName'] ) ? $typeName = $_POST['typeName'] : $typeName = "";

$sql="DELETE FROM goods_t WHERE typeID='$_REQUEST[typeID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Goods_Tlist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว