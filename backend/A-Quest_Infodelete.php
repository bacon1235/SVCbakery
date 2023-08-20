<?php include('Connect.php');
isset( $_POST['QNo'] ) ? $QNo = $_POST['QNo'] : $QNo = "";
isset( $_POST['Quest'] ) ? $Quest = $_POST['Quest'] : $Quest = "";
isset( $_POST['Answer'] ) ? $Answer = $_POST['Answer'] : $Answer = "";

$sql="DELETE FROM Quest_Info WHERE QNo='$_REQUEST[QNo]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Quest_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว