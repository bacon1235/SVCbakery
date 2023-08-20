<?php include('Connect.php');
/*$tmp = $_FILES['Cake_Pic']['tmp_name'];
$name = $_FILES['Cake_Pic']['name'];
copy($tmp,$name); */

isset( $_POST['CakeID'] ) ? $CakeID = $_POST['CakeID'] : $CakeID = "";
isset( $_POST['typeName'] ) ? $typeName = $_POST['typeName'] : $typeName = "";
isset( $_name['Cake_Pic'] ) ? $Cake_Pic = $_name['Cake_Pic'] : $Cake_Pic = "";
isset( $_POST['Cake_Name'] ) ? $Cake_Name = $_POST['Cake_Name'] : $Cake_Name = "";
isset( $_POST['Cake_Detail'] ) ? $Cake_Detail = $_POST['Cake_Detail'] : $Cake_Detail = "";
isset( $_POST['Cake_Price'] ) ? $Cake_Price = $_POST['Cake_Price'] : $Cake_Price = "";

$sql="DELETE FROM Cake_Info WHERE CakeID='$_REQUEST[CakeID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Cake_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว