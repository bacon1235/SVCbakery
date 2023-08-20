<?php include('Connect.php');

isset( $_POST['PD_No'] ) ? $PD_No = $_POST['PD_No'] : $PD_No = "";
isset( $_FILES['PD_Pic'] ) ? $PD_Pic = $_FILES['PD_Pic'] : $PD_Pic = "";
isset( $_POST['PD_Name'] ) ? $PD_Name = $_POST['PD_Name'] : $PD_Name = "";
isset( $_POST['typeName'] ) ? $typeName = $_POST['typeName'] : $typeName = "";
isset( $_POST['PD_Detail'] ) ? $PD_Detail = $_POST['PD_Detail'] : $PD_Detail = "";
isset( $_POST['PD_amount'] ) ? $PD_amount = $_POST['PD_amount'] : $PD_amount = "";
isset( $_POST['PD_Price'] ) ? $PD_Price = $_POST['PD_Price'] : $PD_Price = "";

$sql="DELETE FROM Product_Info WHERE PD_No='$_REQUEST[PD_No]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Product_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>