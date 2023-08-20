<?php include('Connect.php');
isset( $_POST['BankNo'] ) ? $BankNo = $_POST['BankNo'] : $BankNo = "";
isset( $_POST['BankName'] ) ? $BankName = $_POST['BankName'] : $BankName = "";
isset( $_POST['BankNumber'] ) ? $BankNumber = $_POST['BankNumber'] : $DepartmentName = "";
isset( $_POST['BankOwner'] ) ? $BankOwner = $_POST['BankOwner'] : $BankOwner = "";
isset( $_POST['BankDate'] ) ? $BankDate = $_POST['BankDate'] : $BankDate = "";

$sql=" UPDATE Bank_Info SET BankName= '$_REQUEST[BankName]',
                            BankNumber= '$_REQUEST[BankNumber]',
                            BankOwner= '$_REQUEST[BankOwner]', 
                            BankDate= '$_REQUEST[BankDate]' WHERE BankNo='$BankNo' ";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Bank_Infolist.php';</script>";
}else{
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}
?>
