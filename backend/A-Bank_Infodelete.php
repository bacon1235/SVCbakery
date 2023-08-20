<?php include('Connect.php');
isset( $_POST['BankNo'] ) ? $BankNo = $_POST['BankNo'] : $BankNo = "";
isset( $_POST['BankName'] ) ? $BankName = $_POST['BankName'] : $BankName = "";
isset( $_POST['BankNumber'] ) ? $BankNumber = $_POST['BankNumber'] : $DepartmentName = "";
isset( $_POST['BankOwner'] ) ? $BankOwner = $_POST['BankOwner'] : $BankOwner = "";
isset( $_POST['BankDate'] ) ? $BankDate = $_POST['BankDate'] : $BankDate = "";

$sql="DELETE FROM Bank_Info WHERE BankNo='$_REQUEST[BankNo]' ";
$result=mysqli_query($conn,$sql);

if($result){
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='A-Bank_Infolist.php';</script>";
}else{
    echo mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}
?>

//ลบได้แล้ว