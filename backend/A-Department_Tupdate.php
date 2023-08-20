<?php include('Connect.php');
isset( $_POST['Department_TID'] ) ? $Department_TID = $_POST['Department_TID'] : $Department_TID = "";
isset( $_POST['Department_TName'] ) ? $Department_TName = $_POST['Department_TName'] : $Department_TName = "";

$sql=" UPDATE department_t SET Department_TName= '$_REQUEST[Department_TName]' WHERE Department_TID='$Department_TID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Department_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
