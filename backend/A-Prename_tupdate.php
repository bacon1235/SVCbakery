<?php include('Connect.php');
isset( $_POST['PrenameID'] ) ? $PrenameID = $_POST['PrenameID'] : $PrenameID = "";
isset( $_POST['Prename'] ) ? $Prename = $_POST['Prename'] : $Prename = "";

$sql=" UPDATE Prename_T SET Prename= '$_REQUEST[Prename]' WHERE PrenameID='$PrenameID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Prename_tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
