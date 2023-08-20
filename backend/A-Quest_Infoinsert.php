<?php include('Connect.php');
isset( $_POST['QNo'] ) ? $QNo = $_POST['QNo'] : $QNo = "";
isset( $_POST['Quest'] ) ? $Quest = $_POST['Quest'] : $Quest = "";
isset( $_POST['Answer'] ) ? $Answer = $_POST['Answer'] : $Answer = "";

$s = "SELECT QNo FROM Quest_Info WHERE QNo='$QNo' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if($num == 0){
    $sql="INSERT INTO Quest_Info (QNo, Quest, Answer) VALUES ('$QNo' ,'$Quest' ,'$Answer') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Quest_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Quest_Infolist.php';</script>";
}
?>