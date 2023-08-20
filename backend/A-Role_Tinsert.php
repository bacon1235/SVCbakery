<?php include('Connect.php');
isset( $_POST['RoleID'] ) ? $RoleID = $_POST['RoleID'] : $RoleID = "";
isset( $_POST['RoleName'] ) ? $RoleName = $_POST['RoleName'] : $RoleName = "";

$s = "SELECT RoleID FROM role_t WHERE RoleID='$RoleID' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO role_t (RoleID, RoleName) VALUES ('$RoleID' ,'$RoleName') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Role_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้');</script>";
    echo "<script>window.location='A-Role_Tlist.php';</script>";
}
?>