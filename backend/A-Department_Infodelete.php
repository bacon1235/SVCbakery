<?php include('Connect.php');
isset( $_POST['DepartmentID'] ) ? $DepartmentID = $_POST['DepartmentID'] : $DepartmentID = "";
isset( $_POST['Department_TID'] ) ? $Department_TID = $_POST['Department_TID'] : $Department_TID = "";
isset( $_POST['DepartmentName'] ) ? $DepartmentName = $_POST['DepartmentName'] : $DepartmentName = "";

$sql="DELETE FROM Department_Info WHERE DepartmentID='$_REQUEST[DepartmentID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Department_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว