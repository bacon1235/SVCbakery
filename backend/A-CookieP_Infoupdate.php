<?php include('Connect.php');
$tmp = $_FILES['CookieP_Pic']['tmp_name'];
$name = $_FILES['CookieP_Pic']['name'];
copy($tmp,$name);
$locate_img ="fileupload/img/";
move_uploaded_file($tmp,$locate_img.$name);

isset( $_POST['CookieP_ID'] ) ? $CookieP_ID = $_POST['CookieP_ID'] : $CookieP_ID = "";
isset( $_POST['typeID'] ) ? $typeID = $_POST['typeID'] : $typeID = "";
isset( $_FILES['CookieP_Pic'] ) ? $CookieP_Pic = $_FILES['CookieP_Pic'] : $CookieP_Pic = "";
isset( $_POST['CookieP_Name'] ) ? $CookieP_Name = $_POST['CookieP_Name'] : $CookieP_Name = "";
isset( $_POST['CookieP_Detail'] ) ? $CookieP_Detail = $_POST['CookieP_Detail'] : $Cookie_Detail = "";
isset( $_POST['CookieP_Price'] ) ? $CookieP_Price = $_POST['CookieP_Price'] : $CookieP_Price = "";

$sql=" UPDATE CookieP_Info SET CookieP_ID= '$_REQUEST[CookieP_ID]',
                            typeID= '$_REQUEST[typeID]',
                            CookieP_Pic= '$name',
                            CookieP_Name= '$_REQUEST[CookieP_Name]',
                            CookieP_Detail= '$_REQUEST[CookieP_Detail]',
                            CookieP_Price= '$_REQUEST[CookieP_Price]' 
                         WHERE CookieP_ID='$CookieP_ID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
   echo "<script>window.location='A-CookieP_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>