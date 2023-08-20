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

$s = "SELECT CookieNo FROM Cookie_Info WHERE CookieNo='$CookieNo' ";
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
    $sql="INSERT INTO Cookie_Info (CookieNo, typeID, Cookie_Pic, Cookie_Name, Cookie_Size, Cookie_Detail, Cookie_Price) VALUES ('$CookieNo' ,'$typeID' ,'$name' ,'$Cookie_Name' ,'$Cookie_Size' ,'$Cookie_Detail' ,'$Cookie_Price') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Cookie_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Cookie_Infolist.php';</script>";
}
?>