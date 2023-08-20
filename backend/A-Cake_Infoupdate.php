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

/*if($_POST){
    if(isset($_FILES['Cake_Pic'])){
        $name_file =  $_FILES['Cake_Pic']['name'];
        $tmp_name =  $_FILES['Cake_Pic']['tmp_name'];
        copy($name_file,$tmp_name);
        $locate_img ="fileupload/";
        move_uploaded_file($tmp,$locate_img.$name);
    }
} */

$sql=" UPDATE Cake_Info SET CakeID= '$_REQUEST[CakeID]',
                            typeName= '$_REQUEST[typeName]',
                            Cake_Pic= '$name',
                            Cake_Name= '$_REQUEST[Cake_Name]',
                            Cake_Detail= '$_REQUEST[Cake_Detail]',
                            Cake_Price= '$_REQUEST[Cake_Price]' 
                         WHERE CakeID='$CakeID' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
   echo "<script>window.location='A-Cake_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>