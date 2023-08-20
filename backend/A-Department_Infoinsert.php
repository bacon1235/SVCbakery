<?php include('Connect.php');
isset( $_POST['DepartmentID'] ) ? $DepartmentID = $_POST['DepartmentID'] : $DepartmentID = "";
isset( $_POST['Department_TID'] ) ? $Department_TID = $_POST['Department_TID'] : $Department_TID = "";
isset( $_POST['DepartmentName'] ) ? $DepartmentName = $_POST['DepartmentName'] : $DepartmentName = "";

$s = "SELECT DepartmentID FROM Department_Info WHERE DepartmentID='$DepartmentID' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO Department_Info (DepartmentID, Department_TID, DepartmentName) VALUES ('$DepartmentID' ,'$Department_TID' ,'$DepartmentName') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Department_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Department_Infolist.php';</script>";
}
?>