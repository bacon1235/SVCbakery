<?php include('Connect.php');
isset( $_POST['Department_TID'] ) ? $Department_TID = $_POST['Department_TID'] : $Department_TID = "";
isset( $_POST['Department_TName'] ) ? $Department_TName = $_POST['Department_TName'] : $Department_TName = "";

$s = "SELECT Department_TID FROM Department_T WHERE Department_TID='$Department_TID' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO Department_T (Department_TID, Department_TName) VALUES ('$Department_TID' ,'$Department_TName') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Department_Tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Department_Tlist.php';</script>";
}
?>