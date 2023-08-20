<?php include('Connect.php');
isset( $_POST['RoleID'] ) ? $RoleID = $_POST['RoleID'] : $RoleID = "";
isset( $_POST['RoleName'] ) ? $RoleName = $_POST['RoleName'] : $RoleName = "";

$sql="DELETE FROM role_t WHERE RoleID='$_REQUEST[RoleID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Role_Tlist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>