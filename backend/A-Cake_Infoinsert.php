<?php include('Connect.php');
$tmp = $_FILES['Cake_Pic']['tmp_name'];
$name = $_FILES['Cake_Pic']['name'];
copy($tmp,$name);
$locate_img ="fileupload/img/";
move_uploaded_file($tmp,$locate_img.$name);

isset( $_POST['CakeID'] ) ? $CakeID = $_POST['CakeID'] : $CakeID = "";
isset( $_POST['typeName'] ) ? $typeName = $_POST['typeName'] : $typeName = "";
isset( $_FILES['Cake_Pic'] ) ? $Cake_Pic = $_FILES['Cake_Pic'] : $Cake_Pic = "";
isset( $_POST['Cake_Name'] ) ? $Cake_Name = $_POST['Cake_Name'] : $Cake_Name = "";
isset( $_POST['Cake_Detail'] ) ? $Cake_Detail = $_POST['Cake_Detail'] : $Cake_Detail = "";
isset( $_POST['Cake_Price'] ) ? $Cake_Price = $_POST['Cake_Price'] : $Cake_Price = "";

$s = "SELECT CakeID FROM Cake_Info WHERE CakeID='$CakeID' ";
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
    $sql="INSERT INTO Cake_Info (CakeID, typeName, Cake_Pic, Cake_Name, Cake_Detail, Cake_Price) VALUES ('$CakeID' ,'$typeName' ,'$name' ,'$Cake_Name' ,'$Cake_Detail' ,'$Cake_Price') ";
    mysqli_query($conn,$sql);
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Cake_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถบันทึกข้อมูลได้ เนื่องจากข้อมูลซ้ำ');</script>";
    echo "<script>window.location='A-Cake_Infolist.php';</script>";
}
?>