<?php include('Connect.php');
$tmp = $_FILES['Cookie_Pic']['tmp_name'];
$name = $_FILES['Cookie_Pic']['name'];
copy($tmp,$name);
$locate_img ="fileupload/img/";
move_uploaded_file($tmp,$locate_img.$name);

isset( $_POST['CookieNo'] ) ? $CookieNo = $_POST['CookieNo'] : $CookieNo = "";
isset( $_POST['typeID'] ) ? $typeID = $_POST['typeID'] : $typeID = "";
isset( $_FILES['Cookie_Pic'] ) ? $Cookie_Pic = $_FILES['Cookie_Pic'] : $Cookie_Pic = "";
isset( $_POST['Cookie_Name'] ) ? $Cookie_Name = $_POST['Cookie_Name'] : $Cookie_Name = "";
isset( $_POST['Cookie_Size'] ) ? $Cookie_Size = $_POST['Cookie_Size'] : $Cookie_Size = "";
isset( $_POST['Cookie_Detail'] ) ? $Cookie_Detail = $_POST['Cookie_Detail'] : $Cookie_Detail = "";
isset( $_POST['Cookie_Price'] ) ? $Cookie_Price = $_POST['Cookie_Price'] : $Cookie_Price = "";

$sql=" UPDATE Cookie_Info SET CookieNo= '$_REQUEST[CookieNo]',
                            typeID= '$_REQUEST[typeID]',
                            Cookie_Pic= '$name',
                            Cookie_Name= '$_REQUEST[Cookie_Name]',
                            Cookie_Size= '$_REQUEST[Cookie_Size]',
                            Cookie_Detail= '$_REQUEST[Cookie_Detail]',
                            Cookie_Price= '$_REQUEST[Cookie_Price]' 
                         WHERE CookieNo='$CookieNo' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
   echo "<script>window.location='A-Cookie_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>