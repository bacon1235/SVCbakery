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

$s = "SELECT CookieP_ID FROM CookieP_Info WHERE CookieP_ID='$CookieP_ID' ";
$result=mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
/*
if($_POST){
    if(isset($_FILES['Cake_Pic'])){
        $name_file =  $_FILES['Cake_Pic']['name'];
        $tmp_name =  $_FILES['Cake_Pic']['tmp_name'];
        $locate_img ="fileupload/img/";
        move_uploaded_file($tmp_name,$locate_img.$name_file);
    }
}*/

if($num == 0){
    $sql="INSERT INTO CookieP_Info (CookieP_ID, typeID, CookieP_Pic, CookieP_Name, CookieP_Detail, CookieP_Price) VALUES ('$CookieP_ID' ,'$typeID' ,'$name' ,'$CookieP_Name' ,'$CookieP_Detail' ,'$CookieP_Price') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-CookieP_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-CookieP_Infolist.php';</script>";
}
?>