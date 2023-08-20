<?php include('Connect.php');
isset( $_POST['typeID'] ) ? $typeID = $_POST['typeID'] : $typeID = "";
isset( $_POST['typeName'] ) ? $typeName = $_POST['typeName'] : $typeName = "";

$s = "SELECT typeName FROM goods_t WHERE typeName='$typeName' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO goods_t (typeID, typeName) VALUES ('$typeID' ,'$typeName') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Goods_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    echo "<script>window.location='A-Goods_Tlist.php';</script>";
}
?>