<?php include('Connect.php');
isset( $_POST['RoleID'] ) ? $RoleID = $_POST['RoleID'] : $RoleID = "";
isset( $_POST['RoleName'] ) ? $RoleName = $_POST['RoleName'] : $RoleName = "";

$sql=" UPDATE role_t SET RoleName= '$_REQUEST[RoleName]' WHERE RoleID='$RoleID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Role_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
