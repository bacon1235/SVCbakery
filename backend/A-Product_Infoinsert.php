<?php include('Connect.php');
$tmp = $_FILES['PD_Pic']['tmp_name'];
$name = $_FILES['PD_Pic']['name'];
copy($tmp,$name);
$locate_img ="fileupload/img/";
move_uploaded_file($tmp,$locate_img.$name);

isset( $_POST['PD_No'] ) ? $PD_No = $_POST['PD_No'] : $PD_No = "";
isset( $_FILES['PD_Pic'] ) ? $PD_Pic = $_FILES['PD_Pic'] : $PD_Pic = "";
isset( $_POST['PD_Name'] ) ? $PD_Name = $_POST['PD_Name'] : $PD_Name = "";
isset( $_POST['typeName'] ) ? $typeName = $_POST['typeName'] : $typeName = "";
isset( $_POST['PD_Detail'] ) ? $PD_Detail = $_POST['PD_Detail'] : $PD_Detail = "";
isset( $_POST['PD_amount'] ) ? $PD_amount = $_POST['PD_amount'] : $PD_amount = "";
isset( $_POST['PD_Price'] ) ? $PD_Price = $_POST['PD_Price'] : $PD_Price = "";
isset( $_POST['discount'] ) ? $discount = $_POST['discount'] : $discount = "";

$s = "SELECT PD_No FROM Product_Info WHERE PD_No='$PD_No' ";
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
    $sql="INSERT INTO Product_Info (PD_No, PD_Pic, PD_Name, typeName, PD_Detail, PD_amount, PD_Price, discount) VALUES ('$PD_No' ,'$name' ,'$PD_Name' ,'$typeName' ,'$PD_Detail' ,'$PD_amount' ,'$PD_Price' ,'$discount') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Product_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Product_Infolist.php';</script>";
}
?>