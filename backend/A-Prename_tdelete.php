<?php include('Connect.php');
isset( $_POST['PrenameID'] ) ? $PrenameID = $_POST['PrenameID'] : $PrenameID = "";
isset( $_POST['Prename'] ) ? $Prename = $_POST['Prename'] : $Prename = "";

$sql="DELETE FROM Prename_T WHERE PrenameID='$_REQUEST[PrenameID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Prename_tlist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว