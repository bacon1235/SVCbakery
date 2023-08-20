<?php include('Connect.php');
isset( $_POST['Department_TID'] ) ? $Department_TID = $_POST['Department_TID'] : $Department_TID = "";
isset( $_POST['Department_TName'] ) ? $Department_TName = $_POST['Department_TName'] : $Department_TName = "";

$sql="DELETE FROM department_t WHERE Department_TID='$_REQUEST[Department_TID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Department_Tlist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว