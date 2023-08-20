<?php include('Connect.php');

isset( $_POST['CookieP_ID'] ) ? $CookieP_ID = $_POST['CookieP_ID'] : $CookieP_ID = "";
isset( $_POST['typeID'] ) ? $typeID = $_POST['typeID'] : $typeID = "";
isset( $_FILES['CookieP_Pic'] ) ? $CookieP_Pic = $_FILES['CookieP_Pic'] : $CookieP_Pic = "";
isset( $_POST['CookieP_Name'] ) ? $CookieP_Name = $_POST['CookieP_Name'] : $CookieP_Name = "";
isset( $_POST['CookieP_Detail'] ) ? $CookieP_Detail = $_POST['CookieP_Detail'] : $Cookie_Detail = "";
isset( $_POST['CookieP_Price'] ) ? $CookieP_Price = $_POST['CookieP_Price'] : $CookieP_Price = "";

$sql="DELETE FROM CookieP_Info WHERE CookieP_ID='$_REQUEST[CookieP_ID]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-CookieP_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>