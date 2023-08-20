<?php include('Connect.php');
isset( $_POST['DepartmentID'] ) ? $DepartmentID = $_POST['DepartmentID'] : $DepartmentID = "";
isset( $_POST['Department_TID'] ) ? $Department_TID = $_POST['Department_TID'] : $Department_TID = "";
isset( $_POST['DepartmentName'] ) ? $DepartmentName = $_POST['DepartmentName'] : $DepartmentName = "";

$sql=" UPDATE Department_Info SET Department_TID= '$_REQUEST[Department_TID]',DepartmentName= '$_REQUEST[DepartmentName]' WHERE DepartmentID='$DepartmentID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Department_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
