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

$sql=" UPDATE Product_Info SET PD_No= '$_REQUEST[PD_No]',
                            PD_Pic= '$name',
                            PD_Name= '$_REQUEST[PD_Name]',
                            typeName= '$_REQUEST[typeName]',
                            PD_Detail= '$_REQUEST[PD_Detail]',
                            PD_amount= '$_REQUEST[PD_amount]',
                            PD_Price= '$_REQUEST[PD_Price]', 
                            discount= '$_REQUEST[discount]' 
                         WHERE PD_No='$PD_No' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
   echo "<script>window.location='A-Product_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>