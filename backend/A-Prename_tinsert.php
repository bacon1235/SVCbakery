<?php include('Connect.php');
isset( $_POST['PrenameID'] ) ? $PrenameID = $_POST['PrenameID'] : $PrenameID = "";
isset( $_POST['Prename'] ) ? $Prename = $_POST['Prename'] : $Prename = "";

$s = "SELECT PrenameID FROM Prename_T WHERE PrenameID='$PrenameID' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO Prename_T (PrenameID, Prename) VALUES ('$PrenameID' ,'$Prename') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Prename_tlist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Prename_tlist.php';</script>";
}
?>